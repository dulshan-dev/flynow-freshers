<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.admin')]
#[Title('Upload Packages')]

class UploadPackages extends Component
{
    //form1
    public $PackageName;
    public $Description;
    public $Title;
    public $UploadImage;
    public $UploadURL;
    
    //form2
    public $ExistingBankDetails;
    public $BankName;
    public $AccNumber;
    public $IFSCCode;
    public $Address;

    protected $rulesForm1 = [
        'PackageName' => 'required',
        'Description' => 'required',
        'Title' => 'required',
        'UploadImage' => 'required|image|max:6144',
        'UploadURL' => 'required',
    ];

    protected $rulesForm2 = [
        'ExistingBankDetails' => 'required',
        'BankName' => 'required',
        'AccNumber' => 'required',
        'IFSCCode' => 'required',
        'Address' => 'required',
    ];



    public function render()
    {
        return view('livewire.super-admin.upload-packages');
    }

    public function submitForm1()
    {
        $this->validate($this->rulesForm1, [], ['PackageName', 'Description', 'Title', 'UploadImage', 'UploadURL']);
    }

    public function submitForm2()
    {
        $this->validate($this->rulesForm2, [], ['ExistingBankDetails', 'BankName', 'IFSCCode', 'Address']);
    }
}