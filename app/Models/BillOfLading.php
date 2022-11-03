<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillOfLading extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'Bill_ApplyTime' => 'datetime',
        'Haab_TarikheSanad' => 'datetime',
        'Bill_ArrivalDate' => 'datetime'
    ];


    public function billItems()
    {
        return $this->hasMany(BillItem::class , 'Bill_Id');
    }
}
