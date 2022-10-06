<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'order_date'=>'datetime',
        'transaction_date'=>'datetime',
        'request_date'=>'datetime'
    ];

    public function cargoes(){
        return $this->hasMany(Cargo::class);
    }
}
