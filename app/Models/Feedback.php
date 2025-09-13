<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'user_type',
        'registration_no',
        'membership_no',
        'lecture_id',
        'rating',
        'quality_of_ref_material',
        'feedback_1',
        'feedback_2',
        'feedback_3',
        'feedback_4',
        'feedback_5',
        'feedback_6',
        'feedback_7',
        'feedback_8',
        'feedback_9',
        'feedback_10',
        'feedback_11',
        'feedback_12',
        'feedback_13',
        'feedback_14',
        'feedback_15',
        'feedback_16',
        'feedback_17',
        'feedback_18',
        'feedback_19',
        'feedback_20',
        'feedback_21',
    ];

    public function lectureForFeedback()
    {
        return $this->belongsTo(Lecture::class, 'id');
    }

    public function memberDetails()
    {
        return $this->belongsTo(Member_ssp::class, 'membership_no', 'membership_no');
    }

    public function studentDetails()
    {
        return $this->belongsTo(Registration_ssp::class, 'registration_no', 'registration_no');
    }
}
