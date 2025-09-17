<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BosWebinar;

class BosWebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinars = BosWebinar::all();
        return view('admin.bos-webinar-index', compact('webinars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'webinar_date' => 'required|date',
            'webinar_time' => 'required|string|max:50',
            'video_url' => 'required',
            'is_public' => 'required|in:1,0',
        ]);

        BosWebinar::create($request->all());

        return redirect()->route(currentUser()->role . '.bos_webinar_details.index')->with('success', 'BOS Webinar created successfully.');
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
        $webinar = BosWebinar::findOrFail($id);
        $webinars = BosWebinar::all();
        return view('admin.bos-webinar-index', compact('webinar','webinars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'webinar_date' => 'required|date',
            'webinar_time' => 'required|string|max:50',
            'video_url' => 'required',
            'is_public' => 'required|in:1,0',
        ]);

        $webinar = BosWebinar::findOrFail($id);
        $webinar->update($request->all());

        return redirect()->route(currentUser()->role . '.bos_webinar_details.index')->with('success', 'BOS Webinar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $webinar = BosWebinar::findOrFail($id);
        $webinar->delete();

        return redirect()->route(currentUser()->role . '.bos_webinar_details.index')->with('success', 'BOS Webinar deleted successfully.');
    }

    public function togglePublic(Request $request, $id)
    {
        $webinarDetails = BosWebinar::findOrFail($id);
        $webinarDetails->is_public = $request->has('is_public') ? '1' : '0';
        $webinarDetails->save();
        return redirect()->back()->with('success', 'BOS Webinar status updated successfully!');
    }
}
