<?php

namespace App\Http\Controllers;

use App\Models\StudentJournal;
use Illuminate\Http\Request;

class StudentJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = StudentJournal::all();
        return view('admin.students_journal_index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students_journal_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        StudentJournal::create([
            'title' => $request->title,
            'url' => $request->url
        ]);

        return redirect()->route(currentUser()->role . '.student_journals.index')->with('success', 'Student Journal created successfully !');
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
        $journal = StudentJournal::findOrFail($id);
        return view(currentUser()->role . '.students_journal_edit', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $journal = StudentJournal::findOrFail($id);
        $journal->update([
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route(currentUser()->role . '.student_journals.index')->with('success', 'Student Journal updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $journal = StudentJournal::findOrFail($id);
        $journal->delete();
        return redirect()->route(currentUser()->role . '.student_journals.index')->with('success', 'Student Journal deleted successfully!');
    }

    public function togglePublic(Request $request, $id)
    {
        $sliders = StudentJournal::findOrFail($id);
        $sliders->is_public = $request->has('is_public') ? '1' : '0';
        $sliders->save();
        return redirect()->back()->with('success', 'Student Journal status updated successfully!');
    }

    public function pdfthumbnail($id)
    {
        $journal = StudentJournal::findOrFail($id);
        $url = $journal->url;
        header("Content-Type: application/pdf");
        readfile($url);
        exit;
    }
}
