<?php

namespace App\View\Components\modal;

use Illuminate\View\Component;

class dish extends Component
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
        return view('components.modal.dish');
    }
}
