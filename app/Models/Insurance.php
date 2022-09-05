<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function startDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertIsoDate($value),
        );
    }

    protected function endDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertIsoDate($value),
        );
    }

    protected function queryDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertIsoDate($value),
        );
    }

    protected function issueDate(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => convertIsoDate($value),
        );
    }
}
