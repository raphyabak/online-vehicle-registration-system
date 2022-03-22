<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ApproveLicenseRenew extends Component
{
    public $license, $license_number, $expiry_date;


    protected $rules = [
        'license_number' => 'required',
        'expiry_date' => ['required'],
    ];

    public function mount()
    {
        $this->license_number = $this->license->license_number;
        $this->expiry_date = $this->license->expiry_date;
    }

    public function approve(){
        $this->validate();

        $this->license->update([
            'expiry_date' => $this->expiry_date,
            'renew_notify'=> 0
        ]);

        // $this->emit('approvedVehicle');
        notify()->success('Vehicle Approved Sucessully ⚡️');
        $this->dispatchBrowserEvent('vehicle-approved');
        return redirect('/admin/license-renew-requests');
    }

    public function render()
    {
        return view('livewire.admin.approve-license-renew');
    }
}
