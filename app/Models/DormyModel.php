<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormyModel extends Model
{
   // use HasFactory;
   protected $table="dormitory";
   protected $fillable = [
       'dormitory_name',
       'dormitory_description',
   ];
}
