<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.admin')]
#[Title('Private Fare Account Code')]
class PrivateFareAccountCode extends Component
{
    public function render()
    {
        return view('livewire.super-admin.private-fare-account-code');
    }
}
