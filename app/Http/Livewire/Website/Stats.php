<?php

namespace App\Http\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('website.rfo24.template')]
class Stats extends Component
{
    public function render()
    {
        return view('website.rfo24.statics.view');
    }
}
