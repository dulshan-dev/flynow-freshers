<?php

namespace App\Livewire\SubAgent;

use App\Models\ReIssue;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Livewire\SubAgent\ReissueReqvest;

#[Layout('components.layouts.admin')]
#[Title('Manage Admin')]

class ReissueReqvest extends Component
{
    public $refNumber;
    public $sector;
    public $adminEmailId;
    public $remarks;
    public $purgedPnr;
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
        return view('livewire.sub-agent.reissue-reqvest');
    }

    public function submitForm()
    {
        $this->validate([
            'refNumber' => 'required',
            'sector' => 'required',

        ]);


        ReIssue::create([
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
            'purged_pnr' => $this->purgedPnr,
        ]);


        session()->flash('message', 'Form submitted successfully.');
        $this->reset();
    }
}
