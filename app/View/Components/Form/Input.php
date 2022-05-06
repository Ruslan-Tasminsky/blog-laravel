<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Transmit input class(-es).
     * 
     * @var string
     */    
    public $mode;

    /**
     * Transmit input value.
     * 
     * @var string
     */
    public $val;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode = 'form-control', $val = null)
    {
        $this->mode = $mode;
        $this->val = $val;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
            return view('components.form.input');
    }
}
