<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    // use HasFactory;
    protected $table="booking";
    protected $fillable = [
        'customer_ID',
        'room_id',
        'booking_deposit',
        'booking_status',
    ];
}
