<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\SubPayment;


#[Layout('components.layouts.admin')]
#[Title('Payments')]
class OfflineReqPayment extends Component
{

public $ref_no, $amount, $agency_email, $admin_email, $remarks, $document;
public $payments;

public function render()
{
    $this->payments = SubPayment::all();

    return view('livewire.super-admin.offline-req-payment');
}

}
