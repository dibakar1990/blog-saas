<?php

namespace App\View\Components\admin\delete;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class deleteConfirm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.delete.delete-confirm');
    }
}
