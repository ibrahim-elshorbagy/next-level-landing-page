<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class About extends Component
{
    public function render()
    {
        return view('livewire.about.about')->title('About NEXT LEVEL - Strategic Advisory Firm');
    }
}
