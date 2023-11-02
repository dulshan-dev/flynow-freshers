<?php

namespace App\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\UserVerification;

#[Layout('components.layouts.admin')]
#[Title('Manage Sub Agent')]

class ManageSubAgent extends Component
{
    public $filter = 'all';

    public function filterUsers()
    {
      
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);
        
        if ($user) {
            $user->delete();
        }
    }

    public function render()
    {
        $usersQuery = User::select('users.*', 'user_verifications.status as verification_status')
            ->join('user_verifications', 'users.id', '=', 'user_verifications.user_id');

        if ($this->filter === 'verified') {
            $users = $usersQuery->where('user_verifications.status', 'verified')->get();
        } elseif ($this->filter === 'not_submitted') {
            $users = $usersQuery->where('user_verifications.status', 'Not Submited')->get();
        } else {
            
            $users = $usersQuery->get();
        }

        return view('livewire.super-admin.manage-sub-agent', compact('users'));
    }
}