<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
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
        return view('frontend.pages.checkout');
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
}
