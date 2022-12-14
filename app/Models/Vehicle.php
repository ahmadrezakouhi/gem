<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Schema;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $hidden = ['company_vehicle_info' , 'created_at' ,'updated_at'];

    protected $casts = [
        'smart_number_expire' => 'datetime',
        'driver_licence_expire' => 'datetime',
        'status' => 'boolean'

    ];


    public function companies()
    {
        $columns = Schema::getColumnListing('company_vehicle');
        return $this->belongsToMany(Company::class, 'company_vehicle', 'vehicle_id', 'panel_code')
            ->using(CompanyVehicle::class)->withPivot($columns)->as('company_vehicle_info');
    }
}
