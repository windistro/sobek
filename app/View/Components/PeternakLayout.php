<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PeternakLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        // return view('peternak.peternak');
        return view('peternak.peternak-test');
    }
}
