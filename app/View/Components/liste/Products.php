<?php

namespace App\View\Components\liste;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Products extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public  $products = []

    )
    {
        //
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.liste.products');
    }
}
