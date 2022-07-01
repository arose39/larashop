<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $categories = new Category;
        return view('mainpage', ['categories'=>$categories->orderBy('sort_order','asc')->get()] );
    }

}
