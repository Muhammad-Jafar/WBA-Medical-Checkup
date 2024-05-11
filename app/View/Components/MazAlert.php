<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MazAlert extends Component
{
    public $on;
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($on, $color)
    {
        $this->on = $on;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.maz-alert');
    }
}
