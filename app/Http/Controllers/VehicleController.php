<?php

namespace App\Http\Controllers;

use App\Models\VehicleRegistration;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function viewVehicleDetails($id){
        $vehicle = VehicleRegistration::where('id', $id)->firstorFail();
        return view('view-details', compact('vehicle'));
    }

    public function changeOwner($id){
      $vehicle =  VehicleRegistration::findorfail($id);
      return view('change-owner', compact('vehicle'));
    }

    public function editDetails($id){
        $vehicle =  VehicleRegistration::findorfail($id);
        return view('edit-details', compact('vehicle'));
    }
}
