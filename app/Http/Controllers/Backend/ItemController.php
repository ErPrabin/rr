<?php

namespace App\Http\Controllers\Backend;

use App\Models\Item;
use App\Models\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Traits\Crud;

class ItemController extends Controller
{
    use Crud;
    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'item';
        $this->c = app()->make(Item::class);
        $this->middleware('admin', ['except'=>['index','search','show']]);
    }
    public function create()
    {
        $category = Menu::get();
        return view('backend.pages.' . $this->module . '.create', compact('category'))->withpage($this->module);
    }
    public function edit($id)
    {
        $data = $this->c::findOrFail($id);
        $category = Menu::get();

        return view('backend.pages.' . $this->module . '.edit', compact('data', 'category'))->withPage($this->module);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query'=>'required | min:3'
        ]);
        $value=$request->input('query');
        $item=Item::search($value)->get();
        return view('items.search-results')->with('items', $item);
    }
}
