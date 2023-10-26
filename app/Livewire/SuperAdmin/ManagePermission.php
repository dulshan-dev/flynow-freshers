<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


#[Layout('components.layouts.admin')]
#[Title('Manage Permision')]
class ManagePermission extends Component
{
    public function render()
    {
        return view('livewire.super-admin.manage-permission');
    }
}
