<?php

namespace App\Http\Livewire;

use App\Models\Shipment;
use Livewire\Component;

class DetailShipment extends Component
{
    public $shipment;
 
    public function mount(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }
    
    public function render()
    {   
        return view('livewire.detail-shipment');

    }
}
