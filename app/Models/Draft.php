<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class,'panel_code','panel_code');
    }
}
