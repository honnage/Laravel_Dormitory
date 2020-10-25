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
        'bill_roomcost',
        'bill_date',

        'bill_unitsWater',
        'bill_serviceWater',
        'bill_unitUsedWater',
        'bill_water',
        'bill_waterBefore',

        'bill_unitselEctricity',
        'bill_serviceElectricity',
        'bill_unitUsedEctricity',
        'bill_electricity',
        'bill_electricityBefore',

        'bill_setdate',
        'bill_paydate',
        'bill_fines',
        'biil_status',

    ];
}
