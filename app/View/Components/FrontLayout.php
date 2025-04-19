<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class FrontLayout extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        return view('layouts.front');
    }
}
