<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    // use HasFactory;
    protected $table="customers";
    protected $fillable = [
        'bill_code',
        'customer_id',
        'room_id',
        'bill_title',
        'bill_date',
        'bill_water',
        'bill_serviceWater',
        'bill_unitsWater',
        'bill_electricity',
        'bill_serviceElectricity',
        'bill_unitselEctricity',
        'bill_setdate',
        'bill_paydate',
        'bill_fines',
        'biil_status',

    ];
}
