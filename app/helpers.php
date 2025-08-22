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
