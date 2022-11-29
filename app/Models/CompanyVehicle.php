<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyVehicle extends Pivot
{
    use HasFactory;

    protected $hidden = ['id'];

    public  $incrementing = true;

}
