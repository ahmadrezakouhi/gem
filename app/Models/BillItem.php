<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillItem extends Model
{
    use HasFactory;
    // protected $table = 'bill_item';
    protected $guarded = ['id'];
    protected $casts = [
        'M_TraficStatus' => 'boolean',
        'M_FireStatus' => 'boolean',
        'M_PlanStatus' => 'boolean',
        'BI_Delivered' => 'boolean',
        'BI_DeliveredTime' => 'datetime'
    ];






    public function billOfLading()
    {
        return $this->belongsTo(BillOfLading::class);
    }


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
