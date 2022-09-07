<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillOfLading extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
            'overburden'=>'boolean',
            'estimate_receive_date'=>'datetime',
            'first_driver_health_card_expire'=>'datetime',
            'second_driver_health_card_expire'=>'datetime',
            'vehicle_insurance_expire'=>'datetime',
            'vehicle_inspection_expire'=>'datetime'


    ];

    public function cargoes(){
        return $this->hasMany(Cargo::class);
    }

}
