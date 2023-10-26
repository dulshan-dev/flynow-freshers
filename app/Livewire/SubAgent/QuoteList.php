<?php

namespace App\Livewire\SubAgent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.sub-agent')]
#[Title('Quote List')]

class QuoteList extends Component
{
    public function render()
    {
        return view('livewire.sub-agent.quote-list');
    }
}
