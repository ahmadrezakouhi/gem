<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'smart_number_expire' => 'datetime',
        'status' => 'boolean',
        'inspection_expire' => 'datetime',
        'insurance_expire' => 'datetime',
        'has_roll' => 'boolean',
        'violation' => 'boolean',
        'document_date' => 'datetime'
    ];


    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_vehicle', 'vehicle_id', 'panel_code');
    }
}
