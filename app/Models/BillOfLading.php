<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillOfLading extends Model
{
    use HasFactory;

    protected function estimateReceiveDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertIsoDate($value),
        );
    }
}
