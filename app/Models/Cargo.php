<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $table = 'cargoes';
    protected $guarded = ['id'];
    protected $casts = [
            'traffic'=>'boolean',
            'incendiary'=>'boolean',
            'traffic_zone'=>'boolean'
    ];






    public function billOfLading(){
        return $this->belongsTo(BillOfLading::class);
    }
}
