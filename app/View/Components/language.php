<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class language extends Component
{
    public $locale;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($locale = null)
    {
        $this->locale = $locale ?? APP::currentLocale();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.language');
    }
}
