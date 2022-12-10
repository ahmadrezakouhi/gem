<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'driver_licence_expire' => 'datetime',
        'health_card_expire' => 'datetime',
        'smart_number_expire' => 'datetime',
        'birth_date' => 'datetime',
        'status' => 'boolean',
        'is_active' => 'boolean',
        'start_activity' => 'datetime',
        'last_inquiry_date' => 'datetime',
    ];

    protected $hidden = ['company_driver_info'];



    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_driver','driver_id','panel_code')
        ->using(CompanyDriver::class);
    }
}
