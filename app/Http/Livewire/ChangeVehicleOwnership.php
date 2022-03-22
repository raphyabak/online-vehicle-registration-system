<?php

namespace App\Http\Livewire;

use App\Models\VehicleRegistration;
use Livewire\Component;

class ChangeVehicleOwnership extends Component
{
    public function render()
    {
        $vehicles = VehicleRegistration::where('user_id', auth()->user()->id)->latest()->get();
        return view('livewire.change-vehicle-ownership', compact('vehicles'));
    }
}
