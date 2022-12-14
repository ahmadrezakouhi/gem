<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class SenderReceiver extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'senders_receivers';
    protected $casts = [
        'is_receiver'=>'boolean',
        'is_sender'=>'boolean'
    ];
    public function addresses(){
        return $this->hasMany(Address::class,'sender_receiver_id','id');
    }


    
}
