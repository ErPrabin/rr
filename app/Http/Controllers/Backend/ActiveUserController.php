<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActiveUserController extends Controller
{
    // use Crud;
    // protected $module;
    // protected $c;

    // public function __construct()
    // {
    //     $this->module = 'category';
    //     $this->c = app()->make(Category::class);
    // }
    public function index()
    {
        $data = User::where('role', 'user')->get();
        return view('backend.pages.active-user.index', compact('data'));
    }
}
