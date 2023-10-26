<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


#[Layout('components.layouts.admin')]
#[Title('Mark Up Fee')]
class MarkUpFee extends Component
{
    public function render()
    {
        return view('livewire.super-admin.mark-up-fee');
    }
}
