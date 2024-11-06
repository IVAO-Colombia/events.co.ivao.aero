<?php

namespace App\Http\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('website.rfe24.template')]
class Home extends Component
{
    public function render()
    {
        return view('website.rfe24.index');
    }
}
