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
        $validated = $request->validate([
            'class' => 'required',
            'course' => 'required',
            'paper_id' => 'required|exists:paper_details,id',
            'faculty_id.*' => 'exists:faculties,id',
            'topic' => 'required|string|max:255',
            'session' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Create the lecture
        $lecture = new Lecture();
        $lecture->class = $validated['class'];
        $lecture->course = $validated['course'];
        $lecture->paper_id = $validated['paper_id'];
        $lecture->faculty_id = $validated['faculty_id'];
        $lecture->topic = $validated['topic'];
        $lecture->session = $validated['session'];
        $lecture->date = $validated['date'];
        $lecture->time = $validated['time'];
        $lecture->video_url = $validated['video_url'];
        $lecture->zoom_link = $validated['zoom_link'];
        $lecture->status = $validated['status'];
        $lecture->save();

        // Attach faculty to the lecture
        $lecture->faculties()->attach($validated['faculty_ids']);

        return redirect()->route('lectures.index')->with('success', 'Lecture created successfully.');
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
