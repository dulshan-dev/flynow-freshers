<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.admin')]
#[Title('MarkUp Transaction Fee Report')]

class MarkupTransactionFeeReport extends Component
{
    public function render()
    {
        return view('livewire.super-admin.markup-transaction-fee-report');
    }
}
