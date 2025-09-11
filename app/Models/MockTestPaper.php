<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MockTestPaper extends Model
{
    protected $table = 'mock_test_paper';
    protected $fillable = ['course', 'title', 'active_date', 'active_time', 'is_public'];

    public function mtpDetails()
    {
        return $this->hasMany(MockTestPaperDetail::class, 'mtp_id');
    }

    public function scopeWithCoursePapers($query, $mtp_id, $course)
    {
        return $query->with(['mtpDetails.paper' => function ($q) use ($course) {
            $q->where('course', $course)
              ->where('scheme', 'new')
              ->where('status', '1');
        }])->findOrFail($mtp_id);
    }
}