<?php

namespace App\Livewire\SubAgent;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.sub-agent')]
#[Title('Statements')]

class ReissueQuotation extends Component
{
    public function render()
    {
        return view('livewire.sub-agent.reissue-quotation');
    }
}
