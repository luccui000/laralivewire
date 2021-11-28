<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $for;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for = '', $label = '')
    {
        $this->label = $label;
        $this->for = $for ? $for : $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
