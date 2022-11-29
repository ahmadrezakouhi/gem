<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function drivers()
    {
        return $this->hasMany(Driver::class, 'panel_code', 'panel_code');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'company_vehicle', 'panel_code', 'vehicle_id')
            ->using(CompanyVehicle::class)->as('company_vehicle');
    }

    public function senders_receivers()
    {
        return $this->hasMany(SenderReciver::class, 'panel_code', 'panel_code');
    }
}
