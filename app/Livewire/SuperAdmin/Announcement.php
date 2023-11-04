<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Announcements;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

#[Layout('components.layouts.admin')]
#[Title('Announcements')]
class Announcement extends Component
{
    use WithFileUploads;

    public $title;
    public $coverImg;
    public $description;

    public function render()
    {
        return view('livewire.super-admin.announcement');
    }

    public function saveAnnouncement()
    {
        $this->validate([
            'title' => 'required',
            'coverImg' => 'nullable|image|max:6144', 
            'description' => 'required',
        ]);

        $coverPath = null;
        if ($this->coverImg) {
            $coverPath = $this->coverImg->store('public/announcement');
        }

        
        Announcements::create([
            'admin_id' => auth()->user()->id, 
            'title' => $this->title,
            'cover_img' => $coverPath,
            'description' => $this->description
        ]);

        $this->reset(); 
        Session::flash('success', 'Announcement saved successfully.');

    }
}
