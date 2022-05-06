<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Href extends Component
{
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
    public function __construct($size = false)
    {
        $this->size = $size;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.href');
    }
}
