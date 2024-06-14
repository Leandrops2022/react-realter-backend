<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuCollection;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->get();

        return response()->json(new MenuCollection($menus));
    }
}
