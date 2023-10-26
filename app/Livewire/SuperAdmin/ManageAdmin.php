<?php

namespace App\Livewire\SuperAdmin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
#[Title('Manage Admin')]
class ManageAdmin extends Component
{
    public $FirstName;
    public $Email;
    public $Password;
    public $CPassword;

    public $Status;
    public $Phone;
    public $Role;
    public function createAdmin()
    {
        // dd([
        //     'firstname' => $this->FirstName,
        //     'email' => $this->Email,
        //     'password' => $this->Password,
        //     'cpassword' => $this->CPassword,
        //     'role' => $this->Role,
        //     'status' => $this->Status,
        // ]);

        // echo "<script> alert(" . $this->FirstName . ") </script>";


        // $this->validate(['FirstName' => 'required|max:10']);
        $validation = $this->validate([
            'FirstName' => 'required|max:10',
            'Email' => 'required|email',
            'Phone' => 'required|max:10',
            'Password' => 'min:6|required_with:CPassword|same:CPassword',
            'CPassword' => 'required|min:10',
            'Role' => 'required|max:10'
        ]);


        $admins = Admin::create([
            'name' => $this->FirstName,
            'email' => $this->Email,
            'role' => $this->Role,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => bcrypt($this->Password),
            // password
            // 'two_factor_secret' => null,
            // 'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);

        session()->flash('message', 'Admin Added Successfully');

        $this->resetInput();
        // $this->dispatch('table-updated');
        // if ($admins) {
        //     session()->flash('message', 'Admin Added Successfully');
        // }
    }

    public function resetInput()
    {
        $this->FirstName = '';
        $this->Email = '';
        $this->Password = '';
        $this->CPassword = '';
        //  $this->Role = '';
        // $this->Status= '';
    }
    public function render()
    {
        $admins = Admin::all();
        return view('livewire.super-admin.manage-admin', ['admins' => $admins]);
    }
}