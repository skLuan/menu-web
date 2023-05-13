<?php

namespace App\View\Components\cards\drinks;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class dList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $title, public Collection $array)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.drinks.list');
    }
}
