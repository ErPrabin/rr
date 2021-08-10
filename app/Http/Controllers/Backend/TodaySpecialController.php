<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TodaySpecial;
use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    use Crud;
    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'today-special';
        $this->c = app()->make(TodaySpecial::class);
    }
    // public function create()
    // {
    //     $category = Category::get();
    //     return view('backend.' . $this->module . '.create', compact('category'))->withpage($this->module);
    // }
    public function edit($id)
    {
        $data = $this->c::findOrFail($id);
        $category = Category::get();

        return view('backend.' . $this->module . '.edit', compact('data', 'category'))->withPage($this->module);
    }
}
