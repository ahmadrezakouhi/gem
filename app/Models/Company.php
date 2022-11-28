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
        $columns = Schema::getColumnListing('company_driver');
        return $this->belongsToMany(Driver::class, 'company_driver', 'panel_code', 'driver_id')
        ->using(CompanyDriver::class)->withPivot($columns)->as('company_driver_info');
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
