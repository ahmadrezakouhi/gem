<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cortex extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'cortex_date'=>'datetime',
    ];
}