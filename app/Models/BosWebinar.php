<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BosWebinar extends Model
{
    protected $table = 'bos_webinar';

    protected $fillable = [
        'title',
        'description',
        'webinar_date',
        'webinar_time',
        'video_url',
        'is_public',
    ];
}
