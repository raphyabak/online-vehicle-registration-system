<?php

namespace App\Http\Livewire\Admin;

use App\Models\VehicleRegistration;
use Livewire\Component;

class VehicleRegistrationRequests extends Component
{

    protected $listeners = ['approvedVehicle' => 'render'];

    public function render()
    {
        $vehicles = VehicleRegistration::where('status', 0)->latest()->get();
        return view('livewire.admin.vehicle-registration-requests', compact('vehicles'));
    }
}
