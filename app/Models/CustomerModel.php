<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    // use HasFactory;
    protected $table="customers";
    protected $fillable = [
        'customer_IDcard',
        'customer_firstname',
        'customer_lastname',
        'customer_gender',
        'customer_phone',
        'customer_email',
        'customer_address',
    ];
}
