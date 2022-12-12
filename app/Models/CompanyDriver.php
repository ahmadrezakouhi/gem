<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyDriver extends Pivot
{
    use HasFactory;

    protected $hidden = ['id','panel_code','driver_id','created_at','updated_at'];

    protected $timestamp = true;

    protected $casts = [
        'birth_date' => 'datetime',
        'health_card_expire'=>'datetime',
        'start_activity'=>'datetime',
        'status' => 'boolean'
    ];
}
