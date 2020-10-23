<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllController extends Controller
{
    public function floor($id)
    {
        $customers = DB::table("customers")->where('booking_statusResidence','=',1)->get();
        $rooms = DB::table("rooms")->where('rooms_floor','=',$id)->get();

        // $rooms =  DB::table("rooms")->orderBy('rooms_code')->get();


        // $customers = CustomerModel::all();
        return view('room.floor',compact('customers','rooms'));
    }

    public function bill($id)
    {
        // $customers = DB::table("customers")->where('id','=',$id)->get();
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('customers.id','=',$id)
        ->get();

        return view('room.room',compact('customers'));
        return view('bill.create',compact('customers'));
    }

    // public function room($id)
    // {
    //     $customers = DB::table("customers")->where('room_id','=',$id)->get();
    //     $rooms =  DB::table("rooms")->where("rooms_floor",1)->orderBy('rooms_code')->get();

    //     // $customers = CustomerModel::all();
    //     return view('floor.room',compact('customers','rooms'));
    // }
}
