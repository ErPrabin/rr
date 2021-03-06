<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $items=Item::get();
        $specials=Item::where('todays_special', 1)->get();
        return view('frontend.pages.index', compact('items', 'specials'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout')->with([
            'tax' => $this->getNumbers()->get('tax'),
            'discount' => $this->getNumbers()->get('discount') ,
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
        ]);
    }
    
    public function terms()
    {
        return view('frontend.pages.terms-and-conditions');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy-policy');
    }

    public function menu()
    {
        $menus = Menu::get();
        return view('frontend.pages.menu', compact('menus'));
    }

    public function itemByMenu($id)
    {
        $items = Menu::find($id)->items;
        // dd($items);
        return view('frontend.pages.item', compact('items'));
    }
    public function allItems()
    {
        $items = Item::all();
        return view('frontend.pages.item', compact('items'));
    }
    public function singleItem($id)
    {
        $item = Item::find($id);
        $relateditems=Item::where('menus_id', $item->menus_id)->get();
        return view('frontend.pages.singleItem', compact('item', 'relateditems'));
    }
}
