<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'license_number',
        'issue_date',
        'expiry_date',
        'inspector_id',
        'renew_notify',
    ];

    public function vehicle()
    {
       return $this->hasOne(VehicleRegistration::class, 'vehicle_id');
    }

    public function inspector()
    {
       return $this->hasMany(User::class, 'inspector_id');
    }

}
