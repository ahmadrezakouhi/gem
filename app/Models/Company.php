<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'panel_code';
    public $incrementing = false;

    public function drivers()
    {
        return $this->hasMany(Driver::class, 'panel_code', 'panel_code');
    }

    public function vehicles()
    {
        $columns = Schema::getColumnListing('company_vehicle');

        return $this->belongsToMany(Vehicle::class, 'company_vehicle', 'panel_code', 'vehicle_id')
            ->using(CompanyVehicle::class)->withPivot($columns)->as('company_vehicle_info');
    }

    public function senders_receivers()
    {
        return $this->hasMany(SenderReciver::class, 'panel_code', 'panel_code');
    }
}
