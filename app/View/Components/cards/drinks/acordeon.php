<?php

namespace App\View\Components\cards\drinks;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class acordeon extends Component
{
    public $forId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $title = "", public Collection $array)
    {
        $firstE = $array->first();
        $this->forId = $forId = strval('acordeon-type-'.$firstE->food_type_id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.drinks.acordeon', ['forId' => $this->forId]);
    }
}
