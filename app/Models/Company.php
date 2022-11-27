<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'panel_code';
    public $incrementing = false;

    public function drivers()
    {
        return $this->belongsToMany(Driver::class, 'company_driver', 'panel_code', 'driver_id')
        ->using(CompanyDriver::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'panel_code', 'panel_code');
    }

    public function senders_receivers()
    {
        return $this->hasMany(SenderReciver::class, 'panel_code', 'panel_code');
    }
}
