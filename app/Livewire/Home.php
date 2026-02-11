<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home.home')->title('Strategic Consulting - NEXT LEVEL | Italy, Saudi Arabia, UAE');
    }
}
