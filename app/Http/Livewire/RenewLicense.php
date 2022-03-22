<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Models\VehicleRegistration;
use Livewire\Component;

class RenewLicense extends Component
{
    public function renew(License $license){
        $license->update([
            'renew_notify'=>1
        ]);
        notify()->success('License Renew Request Sent ⚡️');
        return redirect('/renew-license');
    }

    public function render()
    {
        $vehicles = VehicleRegistration::where('user_id', auth()->user()->id)->latest()->get();
        return view('livewire.renew-license', compact('vehicles'));
    }
}
