<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'cargo_declaration_date'=>'datetime',
        'traffic'=>'boolean',
        'traffic_zone'=>'boolean',
        'incendiary'=>'boolean',
        'status_code'=>'boolean',
        'is_local_cancel'=>'boolean',
        'is_logistics'=>'boolean',
        'receipt'=>'boolean',
        'document_date'=>'datetime',
        'first_driver_health_card_expire'=>'datetime',
        'second_driver_health_card_expire'=>'datetime',
        'vehicle_insurance_expire'=>'datetime',
        'vehicle_inspection_expire'=>'datetime',
        'start_validity'=>'datetime',
        'end_validity'=>'datetime'

    ];

    public function company(){
        return $this->belongsTo(Company::class,'panel_code','panel_code');
    }





    




}
