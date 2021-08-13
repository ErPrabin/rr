<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Traits\Crud;

class MenuController extends Controller
{
    use Crud;
    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'menu';
        $this->c = app()->make(Menu::class);
    }
}
