<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $text;
    public $type;
    protected $colors = [
        'success' => 'green',
        'danger' => 'red',
        'warning' => 'purple',
        'default' => 'gray'
    ];

    public function __construct($text, $type = 'default')
    {
        //
        $this->text = $text;
        $this->type = $type;
    }

    public function getColor()
    {
        return $this->colors[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
