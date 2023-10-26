<?php

namespace App\Livewire\SuperAdmin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
#[Title('Admin Profile')]
class AdminProfile extends Component
{
    use WithFileUploads;

    #[Rule('image|max:6144')]
    public $profile_photo_path;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    
    public $currentPassword;
    public $newPassword;
    public $password_confirmation;


    public function mount()
    {
        $this->profile_photo_path = '';

        $this->name = Auth::user()->name;

        $this->email = Auth::user()->email;
    }

    public function updateAdminDetails() {
        $validated = $this->validate();

        if ($this->profile_photo_path) {
            $validated['profile_photo_path'] = $this->profile_photo_path->store('uploads/admin/profile', 'public');
            Admin::where('id', Auth::id())->update($validated);
            $this->reset();
            return redirect(route('admin.profile'));
        }
        else{
            $validated['profile_photo_path'] = Auth::user()->profile_photo_path;
            Admin::where('id', Auth::id())->update($validated);
            $this->reset();
            return redirect(route('admin.profile'));
        }
    }

    public function changePassword()
    {
        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'password_confirmation' => 'required_with:newPassword|same:newPassword'
        ]);

        $this->validate();

        $admin = Admin::find(auth()->id());

        // if (!$admin) {
        //     // Handle the case where no admin with ID 1 is found.
        //     return redirect()->back()->with('error', 'Admin not found');
        // }

        if ($admin && Hash::check($this->currentPassword, $admin->password)) {
            $admin = Admin::find(auth()->id());
            $admin->password = Hash::make($this->newPassword);
            $admin->save();
            $this->reset();
            Auth::logout();

            return redirect('admin/login');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }

    public function render()
    {
        $adminData = Admin::find(Auth::id());
        return view('livewire.super-admin.admin-profile', ['adminData' => $adminData]);
    }
}
