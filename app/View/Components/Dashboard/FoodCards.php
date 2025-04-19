<?php
namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;
use Illuminate\View\View;

class FoodCards extends Component
{
    public function __construct(public LengthAwarePaginator $foodPaginator)
    {}

    public function render(): View|Closure|string
    {
        return view('components.dashboard.food-cards');
    }

    public function randomColor(): string{
        $colors = [
            'red', 'green', 'blue', 'yellow', 'indigo', 'purple', 'pink', 'gray','orange', 'amber', 'lime', 'emerald', 'teal', 'cyan','sky', 'violet', 'fuchsia', 'rose','stone','neutral'
        ];
        return $colors[array_rand($colors)];
    }
}
