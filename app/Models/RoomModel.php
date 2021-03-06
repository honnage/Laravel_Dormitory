<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    //use HasFactory;
    protected $table="rooms";
    protected $fillable = [
        'rooms_code',
        'rooms_floor',
        'rooms_roomtype',
        'rooms_unitsElectricity',
        'rooms_unitsWater',
    ];
}
