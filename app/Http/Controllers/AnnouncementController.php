<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.announcement_index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcement_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'category' => 'required',
            'title' => 'required|string|max:255',
            'type' => 'required',
            'description' => 'required_if:type,text',
            'pdf_link' => 'required_if:type,pdf',
            'date' => 'required',
        ]);

        Announcement::create([
            'course'    => $request->course,
            'category'  => $request->category,
            'title'     => $request->title,
            'type'      => $request->type,
            'description' => $request->type === 'text' ?  $request->description : $request->pdf_link,
            'date'      => $request->date,
            'mock_test_paper' => $request->has('mock_test_paper') ? 1 : 0,
        ]);

        return redirect()->route(currentUser()->role . '.announcement.index')->with('success', 'Announcement Added Successfully !');
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
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcement_edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course' => 'required',
            'category' => 'required',
            'title' => 'required|string|max:255',
            'type' => 'required',
            'description' => 'required_if:type,text',
            'pdf_link' => 'required_if:type,pdf',
            'date' => 'required',
        ]);

        $announcement = Announcement::findOrFail($id);
        $announcement->update([
            'course'    => $request->course,
            'category'  => $request->category,
            'title'     => $request->title,
            'type'      => $request->type,
            'description' => $request->type === 'text' ?  $request->description : $request->pdf_link,
            'date'      => $request->date,
            'mock_test_paper' => $request->has('mock_test_paper') ? 1 : 0,
        ]);

        return redirect()->route(currentUser()->role . '.announcement.index')->with('success', 'Announcement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Announcement::findOrFail($id);
        $slider->delete();
        return redirect()->route(currentUser()->role . '.announcement.index')->with('success', 'Announcement deleted successfully.');
    }

    public function toggleIsnew(Request $request, $id)
    {
        $sliders = Announcement::findOrFail($id);
        $sliders->is_new = $request->has('is_new') ? '1' : '0';
        $sliders->save();
        return redirect()->back()->with('success', 'Announcement updated successfully!');
    }

    public function togglePublic(Request $request, $id)
    {
        $sliders = Announcement::findOrFail($id);
        $sliders->is_public = $request->has('is_public') ? '1' : '0';
        $sliders->save();
        return redirect()->back()->with('success', 'Announcement status updated successfully!');
    }
}
