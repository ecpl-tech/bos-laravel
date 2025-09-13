<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $fillable = [
        'course',
        'batch',
        'display_name',
        'batch_start_date',
        'batch_end_date',
        'batch_status',
        'is_public',
    ];
}
