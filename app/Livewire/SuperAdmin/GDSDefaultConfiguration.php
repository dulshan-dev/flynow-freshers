<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.admin')]
#[Title('GDS Default Configuration')]

class GDSDefaultConfiguration extends Component
{
    public function render()
    {
        return view('livewire.super-admin.g-d-s-default-configuration');
    }
}
