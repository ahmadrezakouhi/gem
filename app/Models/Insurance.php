<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts =[
        'active'=>'boolean',
        'default'=>'boolean',
        'start_date'=>'datetime',
        'end_date'=>'datetime',
        'query_date'=>'datetime',
        'issue_date'=>'datetime'
    ];

    public function tariffs(){
        return $this->hasMany(Tariff::class);
    }


    public function scopeActive($query){
        return $query->where('active',1);
    }

}
