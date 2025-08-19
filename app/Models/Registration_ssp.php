<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration_ssp extends Model
{
    protected $table = 'registration_ssp';
    protected $fillable = [
        'course',
        'registration_no',
        'name',
        'dob',
        'city',
        'state',
        'region',
        'mobile',
        'email',
        'push_noti',
        'ip',
        'date',
        'time',
        'device',
        'status',
        'device_id',
        'fcm_token',
    ];
}
