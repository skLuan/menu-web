<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class drinks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $drinks)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.drinks');
    }
}
