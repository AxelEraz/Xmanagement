<?php

namespace App\Http\Livewire;
use App\Models\Shipment;
use Livewire\Component;

class CreateShipment extends Component
{
    public $receiver;
    public $address;
    public $reference;
    public $zipcode;
    public $seller;
    public $phone;

    protected $rules = [
        'receiver' => 'required|min:4',
        'address' => 'required|min:4',
        'reference' => 'required|min:4',
        'zipcode' => 'required|min:4',
        'seller' => 'required|min:4',
        'phone' => 'required|integer|min:8',
    ];


    public function createShipment()
    {
        if (auth()->check()) {
            $this->validate();

            Shipment::create([
                'user_id' => auth()->id(),
                'status_id' => 1,
                'receiver'=> $this->receiver,
                'address' => $this->address,
                'reference' => $this->reference,
                'zipcode' => $this->zipcode,
                'seller' => $this->seller,
                'phone' => $this->phone,
            ]);

            session()->flash('success_message', 'Envio creado con exito');

            $this->reset();

            return redirect()->route('shipments');
        }

        abort(403);
    }
    public function render()
    {
        return view('livewire.create-shipment');
    }
}

