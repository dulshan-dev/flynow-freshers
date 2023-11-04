<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.admin')]
#[Title('Upload Bank Details')]

class UploadBankDetails extends Component
{
    public $ExistingBankDetails;
    public $BankName;
    public $AccNumber;
    public $IFSCCode;
    public $Address;
    public $successMessage = '';

    protected $rulesForm2 = [
        'ExistingBankDetails' => 'required',
        'BankName' => 'required',
        'AccNumber' => 'required',
        'IFSCCode' => 'required',
        'Address' => 'required',
    ];

    public function submitForm2()
    {
        $this->validate($this->rulesForm2, [], ['ExistingBankDetails', 'BankName', 'AccNumber', 'IFSCCode', 'Address']);
    }
    public function render()
    {
        return view('livewire.super-admin.upload-bank-details');
    }
}