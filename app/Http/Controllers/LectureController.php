<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultyAssignPaper;
use App\Models\Lecture;
use App\Models\PaperDetail;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request, $class)
    {
        $query = Lecture::where('class', $class)
            ->leftJoin('paper_details', 'lectures.paper_id', '=', 'paper_details.id')
            ->leftJoin('faculty', 'lectures.faculty_id', '=', 'faculty.id')
            ->select(
                'lectures.*',
                'paper_details.papername as paper_name',
                'faculty.name as faculty_name'
            );

        if ($request->filled('course')) {
            $query->where('lectures.course', $request->course);
        }
        if ($request->filled('paper_name')) {
            $query->where('paper_details.papername', $request->paper_name);
        }
        if ($request->filled('faculty_name')) {
            $query->where('faculty.name', $request->faculty_name);
        }
        if ($request->filled('date_range')) {
            $dates = explode(' to ', $request->date_range);
            $query->whereBetween('lectures.date', [trim($dates[0]), trim($dates[1])]);
        }

        $class_list = $query->get();
        // For filter dropdowns
        $courses = ['Foundation', 'Intermediate', 'Final'];
        $papers = $request->filled('course')
            ? PaperDetail::where('course', $request->course)->where('scheme', 'new')->pluck('papername')
            : collect();
        $faculties = Faculty::pluck('name');
        return view('admin.lecture_list', compact('class_list', 'courses', 'papers', 'faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $papersByCourse = PaperDetail::papersByCourse();

        // Get faculty assigned to each paper_id
        $facultyByPaper = [];
        $assignments = FacultyAssignPaper::where('status', '1')->get();

        foreach ($assignments as $assign) {
            $facultyDetail = Faculty::where('id', $assign->faculty_id)->first();
            if ($facultyDetail) {
                $facultyByPaper[$assign->paper_id][] = [
                    'id' => $facultyDetail->id,
                    'name' => $facultyDetail->name
                ];
            }
        }

        // Sort faculty names ASC for each paper_id
        foreach ($facultyByPaper as &$facultyList) {
            usort($facultyList, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
            });
        }
        unset($facultyList);
        return view('admin.lecture_add', compact('papersByCourse', 'facultyByPaper'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectedPapers = collect($request->input('paper', []))
        ->only(['foundation', 'intermediate', 'final'])
        ->map(function ($papers) {
            return array_filter($papers); // remove empty "" values inside
        })
        ->filter(function ($papers) {
                return !empty($papers); // remove empty arrays
            });
        $paper_id = collect($selectedPapers)->flatten()->first();

        $validated = $request->validate([
            'class_type' => 'required|string',
            'course' => 'required_if:class_type,live,bfys,revisionary|string',
            'paper_id' => 'required_if:course,foundation,intermediate,final',
            'bfys_paper' => 'nullable|string',
            'faculty_id' => 'required|exists:faculty,id',
            'topic' => 'required|string|max:255',
            'session_time' => 'required|string',
        ]);

        //dd($request['paper']['foundation']);
        //dd($request->all());
        $lecture = new Lecture();
        $lecture->class = $request['class_type'];
        $lecture->course = $request['course'];
        
        $lecture->paper_id = $paper_id ?? 0;

        $lecture->bfys_paper = ($request['class_type'] === 'bfys') ? ($request['bfys_paper'] ?? null) : null;
        $lecture->faculty_id = $request['faculty_id'];
        $lecture->topic = $request['topic'];
        $lecture->session = $request['session_time'];
        $lecture->date = $request['date'];
        $lecture->time = $request['time'];
        $lecture->video_url = $request['video_url'] ?? null;
        $lecture->zoom_link = $request['zoom_link'] ?? null;
        $lecture->batch = getBatch($request['course'], 'current'); // get from helper
        $lecture->save();

        return redirect()->route(currentUser()->role . '.lecture.add')->with('success', 'Lecture created successfully.');
        // Attach faculty to the lecture
        //$lecture->faculties()->attach($validated['faculty_ids']);

        //return redirect()->route('lectures.index')->with('success', 'Lecture created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lecture = Lecture::findOrFail($id);

        $papersByCourse = PaperDetail::papersByCourse();

        // Get faculty assigned to each paper_id
        $facultyByPaper = [];
        $assignments = FacultyAssignPaper::where('status', '1')->get();

        foreach ($assignments as $assign) {
            $facultyDetail = Faculty::where('id', $assign->faculty_id)->first();
            if ($facultyDetail) {
                $facultyByPaper[$assign->paper_id][] = [
                    'id' => $facultyDetail->id,
                    'name' => $facultyDetail->name
                ];
            }
        }

        // Sort faculty names ASC for each paper_id
        foreach ($facultyByPaper as &$facultyList) {
            usort($facultyList, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
            });
        }
        unset($facultyList);

        return view('admin.lecture_edit', compact('lecture', 'papersByCourse', 'facultyByPaper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $selectedPapers = collect($request->input('paper', []))
            ->only(['foundation', 'intermediate', 'final'])
            ->map(function ($papers) {
                return array_filter($papers);
            })
            ->filter(function ($papers) {
                return !empty($papers);
            });
        $paper_id = collect($selectedPapers)->flatten()->first();

        $validated = $request->validate([
            'class_type' => 'required|string',
            'course' => 'required_if:class_type,live,bfys,revisionary|string',
            'paper_id' => 'required_if:course,foundation,intermediate,final',
            'bfys_paper' => 'nullable|string',
            'faculty_id' => 'required|exists:faculty,id',
            'topic' => 'required|string|max:255',
            'session_time' => 'required|string',
        ]);

        $lecture = Lecture::findOrFail($id);
        $lecture->class = $request['class_type'];
        $lecture->course = $request['course'];
        $lecture->paper_id = $paper_id;
        $lecture->bfys_paper = ($request['class_type'] === 'bfys') ? ($request['bfys_paper'] ?? null) : null;
        $lecture->faculty_id = $request['faculty_id'];
        $lecture->topic = $request['topic'];
        $lecture->session = $request['session_time'];
        $lecture->date = $request['date'];
        $lecture->time = $request['time'];
        $lecture->video_url = $request['video_url'];
        $lecture->zoom_link = $request['zoomurl'];
        $lecture->batch = getBatch('LVC', 'current'); // get from helper
        $lecture->save();

        return redirect()->route(currentUser()->role . '.lecture.list', [$lecture->class])->with('success', 'Lecture updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->delete();

        return redirect()->route(currentUser()->role . '.lecture.list', [$lecture->class])->with('success', 'Lecture deleted successfully.');
    }
    
    public function status(string $id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->is_public = ($lecture->is_public === '1') ? '0' : '1';
        $lecture->save();

        return redirect()->back()->with('success', 'Lecture status updated successfully.');
    }
}
