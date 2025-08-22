<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders_index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'level' => 'required'
        ]);

        $mainImagePath = null;

        if ($request->hasFile('img')) {
            $random = rand(10000, 99999);
            $thumbName = 'slider_' . time() . '-' . $random . '.' . $request->file('img')->getClientOriginalExtension();
            $mainImagePath = $request->file('img')->storeAs('sliders_photos', $thumbName, 'public');
        }

        Slider::create([
            'title' => $request->title,
            'img' => $mainImagePath,
            'level' => $request->level,
            'description' => $request->description ?? null,
            'is_public' => $request->is_public ? '1' : '0',
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider Added Successfully !');
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders_edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'level' => 'required'
        ]);
        $slider = Slider::findOrFail($id);
        $mainImagePath = null;
        if ($request->hasFile('img')) {
            $random = rand(10000, 99999);
            $thumbName = 'slider_' . time() . '-' . $random . '.' . $request->file('img')->getClientOriginalExtension();
            $mainImagePath = $request->file('img')->storeAs('sliders_photos', $thumbName, 'public');

            if ($slider->img) {
                Storage::disk('public')->delete($slider->img);
            }
        }
        $slider->update([
            'title' => $request->title,
            'img' => $mainImagePath ?? $slider->img,
            'level' => $request->level,
            'description' => $request->description ?? null,
            'is_public' => $request->is_public ? '1' : '0',
        ]);
        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
    }

    public function togglePublic(Request $request, $id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->is_public = $request->has('is_public') ? '1' : '0';
        $sliders->save();
        return redirect()->back()->with('success', 'Slider status updated successfully!');
    }
}
