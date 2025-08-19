<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultyAssignPaper;
use App\Models\PaperDetail;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();
        return view('admin.faculty-list', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faculty-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculty,email',
            'mobile' => 'required|string|max:15',
            'password' => 'required|min:6',
            'status' => 'required|in:1,0',
        ]);

        Faculty::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'show_password' => $request->password,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.faculty.list')->with('success', 'Faculty added successfully.');
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
        $faculty = Faculty::findOrFail($id);
        return view('admin.faculty-edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculty,email,' . $id,
            'mobile' => 'required|string|max:15',
            'password' => 'nullable|min:6',
            'status' => 'required|in:1,0',
        ]);
        $faculty = Faculty::findOrFail($id);
        $faculty->name = $request->name;
        $faculty->email = $request->email;
        $faculty->mobile = $request->mobile;
        if ($request->filled('password')) {
            $faculty->password = bcrypt($request->password);
            $faculty->show_password = $request->password;
        }
        $faculty->status = $request->status;
        $faculty->save();

        return redirect()->route('admin.faculty.list')->with('success', 'Faculty updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        return redirect()->route('admin.faculty.list')->with('success', 'Faculty deleted successfully.');
    }

    /**
     * Change the status of the faculty.
     */
    public function status(Request $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->status = !$faculty->status;
        $faculty->status = $request->status ? '1' : '0';
        $faculty->save();
        return redirect()->route('admin.faculty.list')->with('success', 'Faculty status updated successfully.');
    }

    public function assignPaper($id)
    {
        $faculty = Faculty::findOrFail($id);
        $Papers = PaperDetail::all();
        $assignedPapers = FacultyAssignPaper::where('faculty_id', $id)->pluck('paper_id')->toArray();
        $assignedPaperList = FacultyAssignPaper::with('paper')->where('faculty_id', $id)->get();

        // return $assignedPaperList;
        return view('admin.faculty-assign-paper', compact('faculty', 'Papers', 'assignedPapers', 'assignedPaperList'));
    }

    public function assignPaperStore(Request $request, $id)
    {
        $request->validate(
            [
                'paper_ids' => 'required|array',
            ],
            [
                'paper_ids.required' => 'Please select at least one paper.',
            ],
        );

        FacultyAssignPaper::where('faculty_id', $id)->delete();

        foreach ($request->paper_ids as $paperId) {
            FacultyAssignPaper::create([
                'faculty_id' => $id,
                'paper_id' => $paperId,
                'status' => '1',
            ]);
        }

        return redirect()->route('admin.faculty.assign.paper', $id)->with('success', 'Papers assigned to faculty successfully.');
    }

    public function assignPaperStatus(Request $request, $id)
    {
        $facultyAssignPaper = FacultyAssignPaper::findOrFail($id);
        $facultyAssignPaper->status = !$facultyAssignPaper->status;
        $facultyAssignPaper->status = $request->status ? '1' : '0';
        $facultyAssignPaper->save();
        return redirect()->route('admin.faculty.assign.paper', $facultyAssignPaper->faculty_id)->with('success', 'Paper assignment status updated successfully.');
    }
}
