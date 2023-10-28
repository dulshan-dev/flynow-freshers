<?php

namespace App\Livewire\SubAgent;
use App\Models\ReIssue;
use Livewire\Component;

use App\Models\RefundRequest;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.sub-agent')]
#[Title('Refund Reqvest')]
class RefundReqvest extends Component
{
    public $refNumber;
    public $sector;
    public $adminEmailId;
    public $remarks;
    public $airlinePnr;
    public $totalFare;
    public $agencyEmailId;
    public $paxName;
    public $pnr;
    public $travelDate;
    public $airline;
    public $noShow;
    public function render()
    {
        return view('livewire.sub-agent.refund-reqvest');
    }

    public function submitForm()
    {
        $this->validate([
            'refNumber' => 'required',
            'sector' => 'required',

        ]);


        RefundRequest::create([
            'pnr' => $this->pnr,
            'airline' => $this->airline,
            'total_fare' => $this->totalFare,
            'airline_pnr' => $this->airlinePnr,
            'pax_name' => $this->paxName,
            'sector' => $this->sector,
            'agency_email' => $this->agencyEmailId,
            'admin_email' => $this->adminEmailId,
            'remarks' => $this->remarks,
            'no_show' => $this->noShow,
        ]);


        session()->flash('message', 'Form submitted successfully.');
        $this->reset();
    }
}
