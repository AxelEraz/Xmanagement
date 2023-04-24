<?php

namespace App\Http\Livewire;

use App\Models\Shipment;
use App\Models\Status;
use Livewire\Component;

class Deliveries extends Component
{
    public function render()
    {   	
        $statuses = Status::all()->pluck('id', 'name');
        
        return view('livewire.deliveries',[
            'shipments' => Shipment::with('status')
            ->where('status_id', '3'),
        ]
        );
    }
}
