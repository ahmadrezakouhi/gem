<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftBillOfLading extends Model
{
    use HasFactory;
    protected $table = 'drafts_bill_of_ladings';
    protected $guarded = ['id'];
}
