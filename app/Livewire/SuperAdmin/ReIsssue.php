<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
// use PHPUnit\Framework\Attributes\Large;
use App\Models\ReIssue;

#[Layout('components.layouts.admin')]
#[Title('Re-Issue')]

class ReIsssue extends Component
{
    public $data;

    public function render()
    {

        $this->data = ReIssue::all();

        return view('livewire.super-admin.re-isssue');
    }
}
