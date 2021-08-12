<?php

use App\Models\Component;
use Illuminate\Support\Str;

if (!function_exists('getCData')) {
    function htmlReq()
    {
        return '<span style="color: #d44950">*</span>';
    }
}
if (!function_exists('getCData')) {
    function getCData($slug, $col)
    {
        $k = Str::slug($slug);
        return app('components')[$k][0][$col] ?? 'Coming Soon...';
    }
}
