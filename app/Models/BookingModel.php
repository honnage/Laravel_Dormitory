<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    // use HasFactory;
    protected $table="booking";
    protected $fillable = [
        // 'booking_code',
        'customer_ID',
        'room_id',
        'booking_deposit',
        'booking_timeperiod',
        'booking_status',
    ];
}
