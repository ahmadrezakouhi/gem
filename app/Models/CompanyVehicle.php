<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyVehicle extends Pivot
{
    use HasFactory;

    protected $hidden = ['id','created_at','updated_at'];

    public  $incrementing = true;

    protected $timestamp = true;

    protected $casts = [
        'inspection_expire' => 'datetime',
        'insurance_expire' => 'datetime',
        'document_date' => 'datetime',
        'status' => 'boolean',
        'has_roll' => 'boolean',
        'violation' => 'boolean',
        'owner_status' => 'boolean'

    ];
}
