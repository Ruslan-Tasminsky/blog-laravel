<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
     /**
     * Transmit input class(-es).
     * 
     * @var string
     */    
    public $mode;
    
    /**
     * Transmit the size of the link (options: 'lg' and 'sm', 'false' means normal size).
     * 
     * @var string|bool
     */
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode = 'primary', $size = false)
    {
        $this->mode = $mode;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
