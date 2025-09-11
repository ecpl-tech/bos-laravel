<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Lecture;
use App\Models\PaperDetail;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lecture_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $papersByCourse = PaperDetail::papersByCourse();

        // Get faculty assigned to each paper_id
        $facultyByPaper = [];
        $assignments = \App\Models\FacultyAssignPaper::where('status', '1')->get();

        foreach ($assignments as $assign) {
            $facultyDetail = \App\Models\Faculty::where('id', $assign->faculty_id)->first();
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
        /*$validated = $request->validate([
            'class_type' => 'required|string',
            'course' => 'required|string',
            'paper_id' => 'required|exists:paper_details,id',
            'bfys_paper' => 'nullable|string',
            'faculty_id' => 'required|exists:faculty,id',
            'topic' => 'required|string|max:255',
            'session_time' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'video_url' => 'nullable|string',
            'zoom_link' => 'nullable|string',
        ]);*/

        $validated = $request->validate([

        ]);
        //dd($request['paper']['foundation']);
        //dd($request->all());
        $lecture = new \App\Models\Lecture();
        $lecture->class = $request['class_type'];
        $lecture->course = $request['course'];
        $selectedPapers = collect($request->input('paper', []))
        ->only(['foundation', 'intermediate', 'final'])
        ->map(function ($papers) {
            return array_filter($papers); // remove empty "" values inside
        })
        ->filter(function ($papers) {
                return !empty($papers); // remove empty arrays
            });
        $paper_id = collect($selectedPapers)->flatten()->first();
        $lecture->paper_id = $paper_id;


        $lecture->bfys_paper = ($request['class_type'] === 'bfys') ? ($request['bfys_paper'] ?? null) : null;
        $lecture->faculty_id = $request['faculty_id'];
        $lecture->topic = $request['topic'];
        $lecture->session = $request['session_time'];
        $lecture->date = $request['date'];
        $lecture->time = $request['time'];
        $lecture->video_url = $request['video_url'] ?? null;
        $lecture->zoom_link = $request['zoom_link'] ?? null;
        $lecture->save();

        return redirect()->route(currentUser()->role . '.lecture.list')->with('success', 'Lecture created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
