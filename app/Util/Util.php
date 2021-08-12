<?php

namespace App\Util;

use Illuminate\Support\Str;

class Util
{
    public static function htmlReq()
    {
        return '<span style="color: #d44950">*</span>';
    }

    public static function getCData($key, $col)
    {
        $k = Str::slug($key);
        return app('components')[$k][0][$col] ?? '';
    }

    public static function getMetDataCont($meta, $page, $title = null)
    {
        $q = $meta->where('page', $page);
        if (is_null($title)) {
            return $q->where('meta_name', '!=', 'title');
        }
        return $q->where('meta_name', 'title')->first()->meta_content ?? config('app.name');
    }
    // public static function getMetDataCont($meta, $page, $title = null)
    // {
    //     $q = $meta->where('page', $page);
    //     if (is_null($title)) {
    //         return $q->where('meta_name', '!=', 'title')->first()->meta_name;
    //     }

    //     return $q->where('meta_name', $title)->first()->meta_content ?? config('app.name');
    // }
}
