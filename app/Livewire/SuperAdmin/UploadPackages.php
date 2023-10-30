<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.admin')]
#[Title('Upload Package')]


class UploadPackages extends Component
{
    public function render()
    {
        return view('livewire.super-admin.upload-packages');
    }
}
