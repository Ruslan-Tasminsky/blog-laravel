<?php

namespace App\View\Components\Message;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class Alert extends Component
{
    /**
     * Transmit alert class(-es).
     * 
     * @var string
     */ 
    public $mode;

    /**
     * Transmit alert title.
     * 
     * @var string  
     */
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode = 'light', $title = 'Alert')
    {
        $this->mode = $mode;
        $this->title = Str::ucfirst($title);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message.alert');
    }
}
