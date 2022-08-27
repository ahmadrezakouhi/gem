<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function driverLicenceExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

    protected function healthCardExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }


    protected function smartNumberExpire(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }


    protected function birthDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

    protected function startActivity(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

}
