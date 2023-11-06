<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.admin')]
#[Title('Credit Limit')]

class CreditLimit extends Component
{
    public function render()
    {
        return view('livewire.super-admin.credit-limit');
    }
}
