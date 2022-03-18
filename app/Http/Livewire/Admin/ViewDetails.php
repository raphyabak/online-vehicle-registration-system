<?php

namespace App\Http\Livewire\Admin;

use App\Models\VehicleRegistration;
use Livewire\Component;

class ViewDetails extends Component
{
    public function render($id)
    {
        $vehicle = VehicleRegistration::where('id', $id)->firstorFail();
        return view('livewire.admin.view-details', compact('vehicle'));
    }
}
