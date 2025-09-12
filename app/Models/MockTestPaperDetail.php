<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MockTestPaperDetail extends Model
{
    protected $table = 'mock_test_paper_detail';
    protected $fillable = ['mtp_id', 'paper_id', 'paper_date', 'paper_time', 'question', 'question_date', 'answer', 'answer_date', 'corrigendum', 'is_public'];

    public function mockTestPaper()
    {
        return $this->belongsTo(MockTestPaper::class, 'mtp_id');
    }

    public function paper()
    {
        return $this->belongsTo(PaperDetail::class, 'paper_id');
    }
}
