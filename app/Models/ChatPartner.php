<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatPartner extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'receiver_id'];

    public function sender()
    {
        return $this->belongsTo(Customer::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Customer::class, 'receiver_id');
    }
}
