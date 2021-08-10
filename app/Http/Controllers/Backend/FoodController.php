<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    use Crud;
    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'food';
        $this->c = app()->make(Food::class);
    }
    public function create()
    {
        $category = Category::get();
        return view('backend.' . $this->module . '.create', compact('category'))->withpage($this->module);
    }
    public function edit($id)
    {
        $data = $this->c::findOrFail($id);
        $category = Category::get();

        return view('backend.' . $this->module . '.edit', compact('data', 'category'))->withPage($this->module);
    }
}
