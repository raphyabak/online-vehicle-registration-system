<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\VehicleRegistration;
use PDF;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function printLicense($id){
        $license = License::where('vehicle_id', $id)->firstorFail();
        $vehicle = VehicleRegistration::findorFail($id);
        $image = base64_encode(file_get_contents(public_path('logo.jpg')));
        $pdf = PDF::loadView('pdf_view', compact('vehicle','license', 'image'));
            return $pdf->stream('license-certificate.pdf');
    }
}
