<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerModel;

class FloorController extends Controller
{
    public function floor1()
    {
        $rooms =  DB::table("rooms")->orderBy('rooms_code')->get();

        // $rooms =  DB::table("rooms")->where("rooms_floor",1)->orderBy('rooms_code')->get();

        $customers = CustomerModel::all();
        return view('floor.floor1',compact('rooms','customers'));
    }
}
