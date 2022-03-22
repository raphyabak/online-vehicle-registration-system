<?php

namespace App\Http\Livewire\Admin;

use App\Models\License;
use Illuminate\Support\Str;
use App\Models\VehicleRegistration;
use Livewire\Component;

class ApproveVehicle extends Component
{
    public $license, $vehicle, $expiry_date;


    protected $rules = [
        'license' => 'required',
        'expiry_date' => ['required'],
    ];

    public function mount()
    {
        $this->license = $this->vehicle->lga.'-'.Str::random(4);
    }
    public function approve(){
        $this->validate();
     $license =   License::create([
            'vehicle_id'=> $this->vehicle->id,
            'license_number'=> $this->license,
            'inspector_id'=> auth()->user()->id,
            'issue_date'=> now(),
            'expiry_date' => $this->expiry_date
        ]);

        $this->vehicle->update([
            'license_id' => $license->id,
            'inspector_id'=> auth()->user()->id,
            'status'=> 1
        ]);

        $this->emit('approvedVehicle');
        notify()->success('Vehicle Approved Sucessully ⚡️');
        $this->dispatchBrowserEvent('vehicle-approved');
        return redirect('/admin/vehicles-registration-requests');
    }

    public function render()
    {
        return view('livewire.admin.approve-vehicle');
    }
}
