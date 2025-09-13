<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'lectures';
    

    public function lectureDetails()
    {
        return $this->hasMany(LectureDetail::class, 'lecture_id');
    }
}
