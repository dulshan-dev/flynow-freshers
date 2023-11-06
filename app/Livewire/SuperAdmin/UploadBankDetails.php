<?php

namespace App\Livewire\SuperAdmin;

use App\Models\UploadBankDetails as ModelsUploadBankDetails;
use Illuminate\Support\Facades\Auth;
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

        ModelsUploadBankDetails::create(
            [
            'existing_bank_details' => $this->ExistingBankDetails,
            'admin_id' => Auth::user()->id,
            'bank_name' => $this->BankName,
            'acc_number' => $this->AccNumber,
            'IFSC_code' => $this->IFSCCode,
            'address' => $this->Address
            ]);

            return redirect()->route('upload-bank-details')->with('success', 'Bank Details Uploaded Successfully...');
    }
    public function render()
    {
        return view('livewire.super-admin.upload-bank-details');
    }
}
