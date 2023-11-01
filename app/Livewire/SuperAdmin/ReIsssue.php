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
    public $status = 'checking';
    public $reissues;

    

    public function render()
    {
        $this->data = ReIssue::all();

        return view('livewire.super-admin.re-isssue');
    }

    public function approveReissue($id)
    {
        ReIssue::where('id', $id)->update(['status' => 'approved']);
    }

    public function rejectReissue($id)
    {
        ReIssue::where('id', $id)->update(['status' => 'rejected']);
    }
}
