<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    protected function smartNumberExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

    protected function inspectionExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }



    protected function insuranceExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }




    protected function documentDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

}
