<?php

namespace App\View\Components\Nav;

use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class navigation extends Component
{
    public $cat;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $categories)
    {
        $this->cat = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.navigation',['cat' => $this->cat]);
    }
}
