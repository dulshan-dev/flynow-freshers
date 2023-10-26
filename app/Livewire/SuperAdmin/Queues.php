<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.admin')]
#[Title('Queues')]
class Queues extends Component
{
    public function render()
    {
        return view('livewire.super-admin.queues');
    }
}
