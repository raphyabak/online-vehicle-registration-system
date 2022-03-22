<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'vehicle_make',
        'make_year',
        'vehicle_model',
        'vehicle_color',
        'chasis_number',
        'engine_number',
        'date_of_purchase',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'dob',
        'marital_status',
        'address',
        'religion',
        'nationality',
        'town',
        'state_of_origin',
        'lga',
        'phone',
        'image',
        'national_id',
        'inspector_id',
        'category',
        'email',
        'user_id',
        'amount',
        'status',
        'license_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id');
    }

    public function license()
    {
       return $this->belongsTo(License::class, 'license_id');
    }

    public function inspector()
    {
       return $this->belongsTo(User::class, 'inspector_id');
    }

}
