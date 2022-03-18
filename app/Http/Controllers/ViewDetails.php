<?php

namespace App\Http\Controllers;

use App\Models\VehicleRegistration;
use Illuminate\Http\Request;

class ViewDetails extends Controller
{
    public function viewVehicleDetails($id){
        $vehicle = VehicleRegistration::where('id', $id)->firstorFail();
        return view('view-details', compact('vehicle'));
    }
}
