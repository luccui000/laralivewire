<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $isEven;
    public function __construct($isEven = false)
    {
        //
        $this->isEven = $isEven;
    }
    public function getBg()
    {
<<<<<<< HEAD
        return $this->isEven ? 'bg-blue-200' : '';
=======
        return $this->isEven ? 'bg-gray-200' : '';
>>>>>>> master
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.row');
    }
}
