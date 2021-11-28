<?php

namespace App\View\Components\Select;

use Illuminate\View\Component;

class Option extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
<<<<<<< HEAD

    public function __construct($value)
    {
        //
        $this->value = $value;
=======
    public $isFist;
    public $isLast;

    public function __construct($value = '', $isFist = false, $isLast = false)
    {
        $this->value = $value;
        $this->isFist = $isFist;
        $this->isLast = $isLast;
    }

    public function selected()
    {

    }
    public function makeBorderOption()
    {
        $border = '';
        if($this->isFist)
            $border = 'rounded-tl rounded-tr';
        if($this->isLast)
            $border = 'rounded-bl rounded-br';

        return $border;
>>>>>>> master
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select.option');
    }
}
