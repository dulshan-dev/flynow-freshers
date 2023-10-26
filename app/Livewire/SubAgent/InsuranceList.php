<?php

namespace App\Livewire\SubAgent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.sub-agent')]
#[Title('Insurance List')]

class InsuranceList extends Component
{
    public function render()
    {
        return view('livewire.sub-agent.insurance-list');
    }
}
