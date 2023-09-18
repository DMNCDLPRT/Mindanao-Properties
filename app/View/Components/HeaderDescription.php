<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderDescription extends Component
{
    public $header;
    public $description;

    public function __construct($header, $description)
    {
        $this->header = $header;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-description');
    }
}
