<?php

namespace App\Http\Controllers;

use App\Models\PushNotification;
use Illuminate\Http\Request;

class PushNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pushnotifications = PushNotification::all();
        return view('admin.push_notification_index', compact('pushnotifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.push_notification_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        PushNotification::create([
            'course' => $request->course,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return redirect()->route(currentUser()->role . '.push-notification.index')->with('success', 'Push Notification Added Successfully !');
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
        $pushnotification = PushNotification::findOrFail($id);
        return view('admin.push_notification_edit', compact('pushnotification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $pushnotification = PushNotification::findOrFail($id);
        $pushnotification->update([
            'course' => $request->course,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return redirect()->route(currentUser()->role . '.push-notification.index')->with('success', 'Push Notification Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = PushNotification::findOrFail($id);
        $slider->delete();
        return redirect()->route(currentUser()->role . '.push-notification.index')->with('success', 'Push Notification deleted successfully.');
    }

    public function send(string $id)
    {
        $pushnotification = PushNotification::findOrFail($id);
        //Notification logic 
        return redirect()->route(currentUser()->role . '.push-notification.index')->with('success', 'Push Notification sent successfully.');
    }
}
