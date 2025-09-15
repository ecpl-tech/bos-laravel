<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feeds = Feed::all();
        return view('admin.feeds_index', compact('feeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feeds_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'category' => 'required',
            'type' => 'required',
            'video_id' => 'required_if:type,video',
            'file' => 'required_if:type,file|mimes:mp4|max:20480',
            'title' => 'required',
        ]);

        // return $request->all();

        $filePath = null;
        if ($request->type === 'file' && $request->hasFile('file')) {
            $random = rand(10000, 99999);
            $fileName = 'feed_' . time() . '-' . $random . '.' . $request->file('file')->getClientOriginalExtension();
            $filePath = $request->file('file')->storeAs('feeds_uploads', $fileName, 'public');
        }

        Feed::create([
            'course'    => $request->course,
            'category'  => $request->category,
            'type'      => $request->type,
            'file_name'     => $request->type === 'video' ?  $request->video_id : $filePath,
            'title'     => $request->title,
        ]);

        return redirect()->route(currentUser()->role . '.feeds.index')->with('success', 'Feeds created successfully !');
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
        $feed = Feed::findOrFail($id);
        return view(currentUser()->role . '.feeds_edit', compact('feed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course' => 'required',
            'category' => 'required',
            'type' => 'required',
            'video_id' => 'required_if:type,video',
            'file' => 'sometimes|nullable|mimes:mp4|max:20480',
            'title' => 'required',
        ]);

        $feed = Feed::findOrFail($id);

        $filePath = $feed->file_name;
        if ($request->type === 'file' && $request->hasFile('file')) {
            $random = rand(10000, 99999);
            $fileName = 'feed_' . time() . '-' . $random . '.' . $request->file('file')->getClientOriginalExtension();
            $filePath = $request->file('file')->storeAs('feeds_uploads', $fileName, 'public');
        } elseif ($request->type === 'video') {
            $filePath = $request->video_id;
        }

        $feed->update([
            'course'    => $request->course,
            'category'  => $request->category,
            'type'      => $request->type,
            'file_name'     => $filePath,
            'title'     => $request->title,
        ]);

        return redirect()->route(currentUser()->role . '.feeds.index')->with('success', 'Feed updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feeds = Feed::findOrFail($id);
        $feeds->delete();
        return redirect()->route(currentUser()->role . '.feeds.index')->with('success', 'Feed deleted successfully!');
    }
}
