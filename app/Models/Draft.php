<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class,'panel_code','panel_code');
    }

    protected function cargoDeclarationDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

    protected function startValidity(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertJsonDate($value),
        );
    }

    protected function endValidity(): Attribute
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
