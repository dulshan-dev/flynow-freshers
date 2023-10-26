<?php

namespace App\Livewire\SubAgent;

use App\Models\Admin;
use App\Models\Topup;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NotifyTopupRequest;

#[Layout('components.layouts.sub-agent')]
#[Title('Topup Request')]

class TopupRequest extends Component
{

    use WithFileUploads;

    //Rules and variables
    #[Rule('required')]
    public $amount;

    #[Rule('required|image|max:6144')]
    public $payment_proof;

    #[Rule('nullable|sometimes')]
    public $comment;


    public function sendTopupRequest()
    {
        $validated = $this->validate();

        if ($this->payment_proof) {
            $validated['payment_proof'] = $this->payment_proof->store('uploads/topup', 'public');
            $validated['user_id'] = Auth::id();
        }

        // Generate the reference_no here
        $validated['reference_no'] = $this->generateReferenceNumber();
        Topup::create($validated);

        $this->reset();
        Admin::find(1)->notify(new NotifyTopupRequest);
        session()->flash('message', 'Topup has been sent.');
    }

    private function generateReferenceNumber()
    {
        // Generate the reference number logic
        // For example : 1-2-1013-0001
        $agent = 3;

        $referenceNo = Auth::id() . $agent . time() . uniqid();
        $sub_agent_id = $agent; // Replace with your actual sub-agent ID
        $date = date('md'); // Assuming you want the month and day from the timestamp
        $dynamicNumber = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
        $referenceNo = "$sub_agent_id-3-$date-$dynamicNumber";

        return $referenceNo;
    }

    public function render()
    {
        return view('livewire.sub-agent.topup-request');
    }
}
