<?php

namespace App\Http\Livewire;

use App\Models\VehicleRegistration;
use Livewire\Component;

class MyVehicles extends Component
{
    public function render()
    {
        $vehicles = VehicleRegistration::where('user_id', auth()->user()->id)->latest()->get();
        return view('livewire.my-vehicles', compact('vehicles'));
    }
}
