<?php

namespace App\Livewire\SubAgent;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

#[Layout('components.layouts.sub-agent')]
#[Title('Profile')]

class Profile extends Component
{

    use WithFileUploads;

    //Rules and variables
    #[Rule('image|max:6144')]
    public $profile_photo_path;

    #[Rule('required')]
    public $first_name;

    #[Rule('required')]
    public $surname;

    #[Rule('required')]
    public $company_name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $phone;

    public function mount()
    {
        $this->profile_photo_path = '';

        $this->first_name = Auth::user()->first_name;

        $this->surname = Auth::user()->surname;

        $this->company_name = Auth::user()->company_name;

        $this->email = Auth::user()->email;
 
        $this->phone = Auth::user()->phone;
    }

    public function updateProfileInfo() {

        $validated = $this->validate();

        if ($this->profile_photo_path) {
            $validated['profile_photo_path'] = $this->profile_photo_path->store('uploads/user/profile', 'public');
            User::where('id', Auth::id())->update($validated);
            $this->reset();
            return redirect(route('sub-agent.profile'));
        }
        else{
            $validated['profile_photo_path'] = Auth::user()->profile_photo_path;
            User::where('id', Auth::id())->update($validated);
            $this->reset();
            return redirect(route('sub-agent.profile'));
        }
        
    }

    public function render()
    {
        return view('livewire.sub-agent.profile');
    }
}
