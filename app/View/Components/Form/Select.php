<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Transmit collection for looping.
     * 
     * @var array
     */
    public $collection;
    
    /**
     * Transmit select class(-es).
     * 
     * @var string
     */    
    public $mode;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($collection = [], $mode = 'form-control')
    {
        $this->collection = $collection;
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
