<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MockTestPaper;
use App\Models\PaperDetail;
use App\Models\MockTestPaperDetail;

class MockTestPaperDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($course,$mtp_id)
    {
        
        // $mtp_id = MockTestPaper::findOrFail($mtp_id)->with('papersByCourse')->get();
        $mtp = MockTestPaper::withCoursePapers($mtp_id, $course);
        $papers = PaperDetail::where(['course' => $course, 'scheme' => 'new', 'status' => '1'])->get();
        // return $mtp;
        return view('admin.mock-test-paper-details-index', compact('mtp','papers','course'));
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
            'mtp_id' => 'required',
            'paper_id' => 'required',
            'paper_date' => 'required',
            'paper_time' => 'required',
        ]);

        $data = $request->only(['mtp_id', 'paper_id', 'paper_date', 'paper_time']);
        $data['is_public'] = 1;

        foreach (['question', 'answer', 'corrigendum'] as $fileType) {
            if ($request->hasFile($fileType)) {

                $file      = $request->file($fileType);
                $timestamp = time();
                $extension = $file->getClientOriginalExtension();

                $fileName  = "MTP_{$request->mtp_id}_{$request->paper_id}_" . ucfirst($fileType) . "_{$timestamp}.{$extension}";
                $filePath  = "uploads/{$fileType}s/{$fileName}";
                $file->move(public_path("uploads/{$fileType}s"), $fileName);

                $data[$fileType] = $filePath;
            }
        }

        if($request->hasFile('question')){
            $data['question_date'] = $request->question_date;
        }
        if($request->hasFile('answer')){
            $data['answer_date'] = $request->answer_date;
        }
        
        MockTestPaperDetail::create($data);

        // return redirect()->route(currentUser()->role . '.mock_test_paper_details.index', ['course' => $request->course, 'mtp_id' => $request->mtp_id])->with('success', 'Mock Test Paper Detail added successfully.');
        return redirect()->back()->with('success', 'Mock Test Paper added successfully!');
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
    public function edit($course,$mtp_id,string $id)
    {
        $mtp = MockTestPaper::withCoursePapers($mtp_id, $course);
        $mtpd = MockTestPaperDetail::findOrFail($id);
        $papers = PaperDetail::where(['course' => $course, 'scheme' => 'new', 'status' => '1'])->get();
        // return $mtp;
        return view('admin.mock-test-paper-details-index', compact('mtp','mtpd','papers','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'paper_id' => 'required|exists:paper_details,id',
            'paper_date' => 'required|date',
            'paper_time' => 'required|string',
            'question'    => 'nullable|file|mimes:pdf,doc,docx|max:2048', // only PDF/DOC max 2MB
            'answer'      => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'corrigendum' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $mtpd = MockTestPaperDetail::findOrFail($id);

        $mtpd->paper_id   = $request->paper_id;
        $mtpd->paper_date = $request->paper_date;
        $mtpd->paper_time = $request->paper_time;

        foreach (['question', 'answer', 'corrigendum'] as $fileType) {
            if ($request->hasFile($fileType)) {
                // Delete old file if exists
                if ($mtpd->$fileType && file_exists(public_path($mtpd->$fileType))) {
                    unlink(public_path($mtpd->$fileType));
                }

                $file      = $request->file($fileType);
                $timestamp = time();
                $extension = $file->getClientOriginalExtension();

                $fileName  = "MTP_{$mtpd->mtp_id}_{$mtpd->paper_id}_" . ucfirst($fileType) . "_{$timestamp}.{$extension}";
                $filePath  = "uploads/{$fileType}s/{$fileName}";
                $file->move(public_path("uploads/{$fileType}s"), $fileName);

                $mtpd->$fileType = $filePath;
            }
        }

        if($request->hasFile('question')){
            $mtpd['question_date'] = $request->question_date;
        }
        if($request->hasFile('answer')){
            $mtpd['answer_date'] = $request->answer_date;
        }

        $mtpd->save();

        return redirect()->back()->with('success', 'Mock Test Paper Detail updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fileType, string $id)
    {
        // dd($fileType, $id);
        $mtpd = MockTestPaperDetail::findOrFail($id);

        // Delete old file if exists
        if (file_exists(public_path($mtpd->$fileType))) {
            unlink(public_path($mtpd->$fileType));
        }

        if($fileType == 'question'){
            $mtpd->question = NULL;
            $mtpd->question_date = NULL;
        }
        if($fileType == 'answer'){
            $mtpd->answer = NULL;
            $mtpd->answer_date = NULL;
        }
        if($fileType == 'corrigendum'){
            $mtpd->corrigendum = NULL;
        }

        $mtpd->save();

        return redirect()->back()->with('success', 'File deleted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $mtpd = MockTestPaperDetail::findOrFail($id);
        if (!$mtpd) {
            return redirect()->back()->with('error', 'Mock Test Paper Detail not found.');
        }
        
        // Delete old files if exists
        foreach (['question', 'answer', 'corrigendum'] as $fileType) {
            if ($mtpd->$fileType && file_exists(public_path($mtpd->$fileType))) {
                unlink(public_path($mtpd->$fileType));
            }
        }

        $mtp_id = $mtpd->mtp_id;
        $course = $mtpd->mockTestPaper->course;

        $mtpd->delete();

        return redirect()->route(currentUser()->role . '.mock_test_paper_details.index', ['course' => $course, 'mtp_id' => $mtp_id])->with('success', 'Mock Test Paper Detail deleted successfully.');
    }
}
