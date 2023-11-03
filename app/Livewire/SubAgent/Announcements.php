<?php

namespace App\Livewire\SubAgent;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.sub-agent')]
#[Title('Announcements')]

class Announcements extends Component
{
    public function render()
    {
        return view('livewire.sub-agent.announcements');
    }
}
