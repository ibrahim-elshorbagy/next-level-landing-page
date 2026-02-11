<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Services extends Component
{
    public function render()
    {
        return view('livewire.services.services')->title('Services - NEXT LEVEL | Strategic Business Development');
    }
}
