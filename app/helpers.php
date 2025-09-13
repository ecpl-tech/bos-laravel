<?php

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

function Batch($type, $status = 'current')
{
    $batches = [
        'LVC_current' => 'batch-01',   // <-- set to batch-01
        'LVRC_current' => 'batch-02',
        'LVC_previous' => 'batch-01',
        'LVRC_previous' => 'batch-01',
    ];
    return $batches[$type . '_' . $status] ?? '';
}
