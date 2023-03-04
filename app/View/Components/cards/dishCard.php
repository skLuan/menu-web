<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class dishCard extends Component
{
    public $dish;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dish)
    {
        $this->dish = $dish;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.dish-card');
    }
}
