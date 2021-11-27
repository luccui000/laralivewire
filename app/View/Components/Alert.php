<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;
    public $type;
    public $size;

    protected $colors = [
        'success' => 'green',
        'danger' => 'red',
        'warning' => 'purple',
        'default' => 'gray'
    ];

    public function __construct($message, $type = 'default', $size = 'md')
    {
        $this->message = $message;
        $this->type = $type;
        $this->size = $size;
    }
    public function getColor()
    {
        $arrayKeys = array_keys($this->colors);
        if(!in_array($this->type, $arrayKeys)) {
            return $this->colors['default'];
        }
        return $this->colors[$this->type];
    }
    public function getSize()
    {

    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
