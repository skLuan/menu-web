<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class Pagecontroller extends Controller
{
    public function menu(){
        $categories = Category::get();
        return view('menu', ['categories' => $categories]);
    }

    public function home(){
        return view('home');
    }

    public function reserve(){

    }
}
