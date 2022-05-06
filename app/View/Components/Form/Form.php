<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Transmit special laravel form methods.
     */
    public $methodform;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($methodform = 'POST')
    {

        $this->methodform = $methodform;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form');
    }
}
