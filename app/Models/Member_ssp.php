<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member_ssp extends Model
{
    protected $table = 'member_ssp';
    protected $fillable = [
        'membership_no',
        'name',
        'email',
        'mobile',
        'dob',
        'city',
        'state',
        'region',
        'push_noti',
        'ip',
        'device',
        'device_id',
        'fcm_token',
        'is_public',
    ];

    public function memberFeedback()
    {
        return $this->hasMany(Feedback::class, 'membership_no', 'membership_no');
    }
}
