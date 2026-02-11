<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Markets extends Component
{
    public function render()
    {
        return view('livewire.markets.markets')->title('Markets - NEXT LEVEL | Italy, Saudi Arabia, UAE');
    }
}
