<?php

namespace App\Livewire\SubAgent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.sub-agent')]
#[Title('Statements')]

class Statements extends Component
{
    public function render()
    {
        return view('livewire.sub-agent.statements');
    }
}
