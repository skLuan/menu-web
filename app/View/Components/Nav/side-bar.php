<?php

namespace App\View\Components\Nav;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class sideBar extends Component
{
    public $routeName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($routeName = null)
    {
        $this->routeName = $routeName ?? Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.side-bar');
    }
}
