<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Set;

class TransportContract extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'ContractDate'=>'datetime'
    ];
}
