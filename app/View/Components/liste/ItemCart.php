<?php

namespace App\View\Components\liste;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemCart extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( public $itemCart = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.liste.item-cart');
    }
}
