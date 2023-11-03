<?php

namespace App\Livewire\SubAgent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.sub-agent')]
#[Title('Get Quote or Insurance')]

class GetQuoteOrInsurance extends Component
{
    public $CountryofResidency;
    public $Destination;
    public $TravelDates;
    public $Travellers;
    
    protected $rules = [
        'CountryofResidency' => 'required',
        'Destination' => 'required',
        'TravelDates' => 'required',
        'Travellers' => 'required',
    ];

    public function render()
    {
        return view('livewire.sub-agent.get-quote-or-insurance');
    }

    public function submitForm()
    {
        $this->validate();

        // Your form submission logic here
    }
}
