<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
if (!function_exists('currentUser')) {
    function currentUser() {
        $guards = ['superadmin', 'admin', 'faculty', 'esahayta', 'techsupport'];
        foreach ($guards as $guard) {
            if (auth($guard)->check()) {
                return auth($guard)->user();
            }
        }
        return null;
    }
}

function getBatch($course, $status)
{
    $batch = DB::table('batches')
        ->where('course', $course)
        ->where('batch_status', $status)
        ->orderBy('batch', 'asc')
        ->get();

    return $batch ?? null;
}
