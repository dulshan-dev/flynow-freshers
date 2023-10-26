<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


#[Layout('components.layouts.admin')]
#[Title('Discount Details')]
class DiscountDetails extends Component
{
    public function render()
    {
        return view('livewire.super-admin.discount-details');
    }
}
