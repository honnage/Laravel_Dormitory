<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryModel extends Model
{
    // use HasFactory;
    protected $table="dormitory";
    protected $fillable = [
        // 'dormitory_name',
        'dormitory_unitsWater',
        'dormitory_serviceWater',
        'dormitory_unitselEctricity',
        'dormitory_serviceElectricity',

    ];
}
