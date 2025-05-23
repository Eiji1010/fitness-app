<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardLayout extends Component
{

    /**
     * @inheritDoc
     */
    public function render(): View|Closure|string
    {
        return view('layouts.dashboard');
    }
}
