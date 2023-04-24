<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Shipment;
use Livewire\Component;

class ShowShipments extends Component
{
    use WithPagination;

    public $shipment;
    public $assignShow;
    public $hasAssign;


    public function render()
    {
        return view('livewire.show-shipments', [
            'shipments' => Shipment::with('status')
            ->Paginate(10),
        ]);
    }
}
