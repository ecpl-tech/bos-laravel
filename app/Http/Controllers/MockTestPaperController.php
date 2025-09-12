<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MockTestPaper;

class MockTestPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mtps = MockTestPaper::all();
        return view('admin.mock-test-papers-index', compact('mtps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mock-test-papers-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'title' => 'required|max:255',
            'active_date' => 'required',
        ]);

        MockTestPaper::create([
            'course' => $request->course,
            'title' => $request->title,
            'active_date' => $request->active_date,
            'is_public' => '1',
        ]);

        return redirect()->route(currentUser()->role . '.mock_test_papers.index')->with('success', 'Mock Test Paper added successfully.');
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
        $mtp = MockTestPaper::findOrFail($id);
        // return view('admin.pou_user_edit', compact('mtp'));
        return view('admin.mock-test-papers-create', compact('mtp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course' => 'required',
            'title' => 'required|max:255',
            'active_date' => 'required',
        ]);

        $mtp = MockTestPaper::findOrFail($id);
        $mtp->course = $request->course;
        $mtp->title = $request->title;
        $mtp->active_date = $request->active_date;
        $mtp->save();

        return redirect()->route(currentUser()->role . '.mock_test_papers.index')->with('success', 'Mock Test Paper updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mtp = MockTestPaper::findOrFail($id);
        $mtp->delete();
        return redirect()->route(currentUser()->role . '.mock_test_papers.index')->with('success', 'Mock Test Paper deleted successfully.');
    }

    public function togglePublic(Request $request, $id)
    {
        $mtp = MockTestPaper::findOrFail($id);
        $mtp->is_public = $request->has('is_public') ? '1' : '0';
        $mtp->save();

        return redirect()->back()->with('success', 'Public status updated successfully!');
    }
}
