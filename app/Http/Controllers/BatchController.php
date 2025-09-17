<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('admin.batches-index', compact('batches'));
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
        // return $request;
        $request->validate([
            'course' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
            'batch_start_date' => 'required|date',
            'batch_end_date' => 'required|date|after_or_equal:batch_start_date',
            'batch_status' => 'required',
            'is_public' => 'required|in:1,0',
        ]);

        Batch::create($request->all());

        return redirect()->route(currentUser()->role.'.batch_details.index')->with('success', 'Batch created successfully.');
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
        $batchDetails = Batch::findOrFail($id);
        $batches = Batch::all();
        return view('admin.batches-index', compact('batchDetails','batches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
            'batch_start_date' => 'required|date',
            'batch_end_date' => 'required|date|after_or_equal:batch_start_date',
            'batch_status' => 'required',
            'is_public' => 'required|in:1,0',
        ]);

        $batchDetails = Batch::findOrFail($id);
        $batchDetails->update($request->all());

        return redirect()->route(currentUser()->role.'.batch_details.index')->with('success', 'Batch updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batchDetails = Batch::findOrFail($id);
        $batchDetails->delete();
        return redirect()->route(currentUser()->role . '.batch_details.index')->with('success', 'Batch deleted successfully!');
    }

    public function togglePublic(Request $request, $id)
    {
        $batchDetails = Batch::findOrFail($id);
        $batchDetails->is_public = $request->has('is_public') ? '1' : '0';
        $batchDetails->save();
        return redirect()->back()->with('success', 'Batch status updated successfully!');
    }
}
