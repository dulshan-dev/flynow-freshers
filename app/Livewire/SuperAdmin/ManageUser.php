<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.admin')]
#[Title('Manage User')]
class ManageUser extends Component
{
    public function render()
    {
        return view('livewire.super-admin.manage-user');
    }
}
