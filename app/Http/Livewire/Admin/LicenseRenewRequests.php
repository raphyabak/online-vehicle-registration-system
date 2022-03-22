<?php

namespace App\Http\Livewire\Admin;

use App\Models\License;
use Livewire\Component;

class LicenseRenewRequests extends Component
{
    public function render()
    {
        $licenses = License::where('renew_notify', 1)->latest()->get();
        return view('livewire.admin.license-renew-requests', compact('licenses'));
    }
}
