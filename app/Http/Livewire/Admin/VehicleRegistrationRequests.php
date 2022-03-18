<?php

namespace App\Http\Livewire\Admin;

use App\Models\VehicleRegistration;
use Livewire\Component;

class VehicleRegistrationRequests extends Component
{
    public function render()
    {
        $vehicles = VehicleRegistration::latest()->get();
        return view('livewire.admin.vehicle-registration-requests', compact('vehicles'));
    }
}
