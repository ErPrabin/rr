<?php

namespace App\Http\Controllers\Backend;

use App\Models\Item;
use App\Models\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Traits\Crud;
use App\Models\ItemOrder;
use App\Models\Order;

class ItemController extends Controller
{
    use Crud;
    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'item';
        $this->c = app()->make(Item::class);
        // $this->middleware('admin', ['except'=>['index','search','show']]);
    }
    public function create()
    {
        $menus = Menu::get();
        return view('backend.pages.' . $this->module . '.create', compact('menus'))->withpage($this->module);
    }
    public function edit($id)
    {
        $data = $this->c::findOrFail($id);
        $menus = Menu::get();

        return view('backend.pages.' . $this->module . '.edit', compact('data', 'menus'))->withPage($this->module);
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
    public function destroy($id)
    {
        $data = $this->c->find($id);
        $order=ItemOrder::where('item_id',$data->id)->first();
        if($order){
        return redirect()->route('admin.' . $this->module . '.index')->with('error-message', 'Could not delete. This item has order item.');

        }
        else{
            $oldfile = $data->image;
        $data->delete();
        $this->removeImage($oldfile);
        return redirect()->route('admin.' . $this->module . '.index')->with('message', 'Deleted Successfully');
        }
        
    }
}
