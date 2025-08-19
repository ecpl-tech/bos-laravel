<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyAssignPaper extends Model
{
    use HasFactory;

    protected $table = 'faculty_assign_paper';

    protected $guarded = [];

    public function paper()
    {
        return $this->belongsTo(PaperDetail::class, 'paper_id');
    }
}
