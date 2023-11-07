<?php

namespace App\Livewire\SubAgent;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

#[Layout('components.layouts.sub-agent')]
#[Title('Statements')]

class TiketReissue extends Component
{
    use WithFileUploads;

    public $PCC;
    public $existing_booking_pnr;
    public $tickets_to_be_reissued = [''];
    public $new_booking_pnr;
    public $is_no_show;
    public $reissue_type;
    public $service_type;
    public $details;
    public $attachment;
    public $tickets;

    public $selectedStatus;
    public $selectedAction;

    public function updateStatus($ticketId)
    {
        $ticket = Ticket::find($ticketId);

        if ($ticket) {
            $ticket->status = $this->selectedStatus;
            $ticket->save();
        }
    }

    public function updateAction($ticketId)
    {
        $ticket = Ticket::find($ticketId);

        if ($ticket) {
            $ticket->action = $this->selectedAction;
            $ticket->save();
        }
    }

    public function mount()
    {
        $this->tickets = Ticket::all();
    }

    public function render()
    {
        return view('livewire.sub-agent.tiket-reissue');
    }

    public function removeTicketField($index)
    {
        if (count($this->tickets_to_be_reissued) > 1) {
            unset($this->tickets_to_be_reissued[$index]);
            $this->tickets_to_be_reissued = array_values($this->tickets_to_be_reissued);
        }
    }

    public function addTicketField()
    {
        $this->tickets_to_be_reissued[] = '';
    }

    public function submitForm()
    {
        $this->validate([
            'PCC' => 'required',
            'existing_booking_pnr' => 'required',
            'attachment' => 'nullable|image|mimes:jpeg,png,pdf',
        ]);

        $filePath = null;

        if ($this->attachment) {
            $mimeType = $this->attachment->getClientMimeType();
            $subfolder = 'reissu';
            if (str_contains($mimeType, 'image/jpeg') || str_contains($mimeType, 'application/pdf')) {
                $subfolder = '/reissu/images_and_pdfs';
            }

            $filePath = $this->attachment->store($subfolder, 'public');
        }

        $ticket = new Ticket([
            'PCC' => $this->PCC,
            'existing_booking_pnr' => $this->existing_booking_pnr,
            'tickets_to_be_reissued' => json_encode($this->tickets_to_be_reissued),
            'new_booking_pnr' => $this->new_booking_pnr,
            'is_no_show' => $this->is_no_show,
            'reissue_type' => $this->reissue_type,
            'service_type' => $this->service_type,
            'details' => $this->details,
            'attachment' => $filePath,
        ]);

        $ticket->save();

        
        $this->reset();
        return redirect()->route('sub-agent.tiketre')->with('success', 'Form submitted successfully.');
    }
}