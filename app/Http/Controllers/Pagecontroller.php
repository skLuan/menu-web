<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Category;

class Pagecontroller extends Controller
{
    public function menu($locale = null){
        if (is_null($locale)) $locale = 'en';

        App::setlocale($locale);
        $categories = Category::get();

        return view('menu', ['categories' => $categories]);
    }
    public function menuClean(){
        $categories = Category::get();

        return view('menuClean', ['categories' => $categories]);
    }

    public function home($locale = null){
        if(is_null($locale)) $locale = 'en';
        App::setlocale($locale);
        return view('home');
    }

    public function reserve($locale = null){
        if (is_null($locale)) $locale = 'en';
        App::setlocale($locale);
        return view('reserves');

    }
}
