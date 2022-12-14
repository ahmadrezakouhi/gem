<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartex extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'kartex_date'=>'datetime',
        'traffic_status' => 'boolean',
        'fire_status' => 'boolean',
        'plan_status' => 'boolean',
    ];
}
