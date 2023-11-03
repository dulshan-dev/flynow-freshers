<?php

namespace App\Livewire\SuperAdmin;


use App\Models\UploadPackages as ModelsUploadPackages;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
#[Title('Upload Packages')]

class UploadPackages extends Component
{
    use WithFileUploads;
    use WithFileUploads;

    public $PackageName;
    public $Description;
    public $Title;
    public $UploadImage;
    public $UploadURL;
    public $check= false;
    //form 2
    public $ExistingBankDetails;
    public $BankName;
    public $AccNumber;
    public $IFSCCode;
    public $Address;
    public $successMessage = '';
    public $successMessage2 = '';

    protected $rulesForm1 = [
        'PackageName' => 'required',
        'Description' => 'required',
        'Title' => 'required',
        'UploadImage' => 'required|mimes:jpeg,png|max:2048',
        'UploadURL' => 'required|url',
    ];

    



    public function render()
    {
        return view('livewire.super-admin.upload-packages');
    }

    public function submitForm1()
    {

        

        $this->validate($this->rulesForm1, [], ['PackageName', 'Description', 'Title', 'UploadImage', 'UploadURL']);

        $imageName = $this->UploadImage->store('upload', 'public');

        $this->UploadImage = $imageName;

        
            ModelsUploadPackages::create(
                [
                'package_name' => $this->PackageName,
                'admin_id' => Auth::user()->id,
                'description' => $this->Description,
                'title' => $this->Title,
                'upload_image' => $this->UploadImage,
                'upload_url' => $this->UploadURL]
                );



        

        $this->successMessage2 = 'Package Uploaded Successfully!!!';

        



        
        
         



        
        $this->UploadImage = null;

        //return redirect()->route('upload-packages')->with('success', 'Data Added Successfully!!!');

        //$this->reset();

        //$this->dispatchBrowserEvent('show-success-message', ['message' => 'Data inserted successfully!']);
    }
}
