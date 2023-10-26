<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Component
{
    // public function login()
    // {
    //     // Authenticate the admin user
    //     if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])) {
    //         return redirect()->to('/admin/dashboard');
    //     } else {
    //         $this->addError('loginError', 'Invalid credentials.');
    //     }
    // }

    // public function logout()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect()->to('/admin/login');
    // }
    public function render()
    {
        return view('livewire.admin-auth');
    }
}