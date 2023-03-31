<?php

namespace App\Http\Controllers;

use App\Mail\forMeson;
use App\Mail\forClient;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class Pagecontroller extends Controller
{
    public function menu($locale = null)
    {
        if (is_null($locale)) $locale = 'en';

        App::setlocale($locale);
        $categories = Category::get();

        return view('menu', ['categories' => $categories]);
    }
    public function menuClean()
    {
        $categories = Category::get();

        return view('menuClean', ['categories' => $categories]);
    }

    public function home($locale = null)
    {
        if (is_null($locale)) $locale = 'en';
        App::setlocale($locale);
        return view('home');
    }

    public function reserve($locale = null)
    {
        if (is_null($locale)) $locale = 'en';
        App::setlocale($locale);
        return view('reserves');
    }

    public function makeReserve(Request $request, $locale = null)
    {
        if (is_null($locale)) $locale = 'en';
        App::setlocale($locale);

        $name = $request->input('name');
        $email = $request->input('email');
        $numero_personas = $request->input('numero_personas');
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        Mail::to('restaurantmesonjesus@gmail.com')->send(new forMeson($name, $email, $numero_personas, $fecha, $hora));
        Mail::to($email)->send(new forClient($name, $numero_personas, $fecha, $hora));
        return redirect()->back()->with('success', 'correo enviado satisfactoriamente');
    }
}
