<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenderReceiver extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'senders_receivers';

    public function addresses(){
        return $this->hasMany(Address::class,'sender_receiver_id','id');
    }
}
