<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DormitoryModel;
use Illuminate\Support\Facades\DB;
use App\Models\BillModel;

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
        // ->select('*','customers.id as id','rooms.id as roomid')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('customers.id','=',$id)
        ->get();
        // $dormitorys = DormitoryModel::all();

        // return view('room.room',compact('customers'));
        return view('bill.create',compact('customers'));
    }

    public function billStore(Request $request, $id)
    {
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->get();
        $dormitorys = DormitoryModel::all();

        $request->validate([
            'room_id' => 'required',
            'titles' => 'required',
            'rooms_unitsWater' => 'required',
            'rooms_unitsElectricity' => 'required',
            'bill_unitselEctricity' => 'required',
            'bill_unitsWater' => 'required',

            // 'unitWater' => 'required',
            // 'unitServiceWater' => 'required',

            // 'bill_unitselEctricity' => 'required',
            // 'bill_serviceElectricity' => 'required',

        ]);
        $date=date("Y-m-d H:i:s");
        $title=date("m-d");
        $bill =  DB::table('bill')
        ->insert([
            'bill_code' => "ID".$request->id ."R".$request->room_id."MY".$request->titles,
            'customer_id'=>$request->id,
            'room_id' => $request->room_id,
            'bill_title' => $request->titles,

            'bill_unitsWater' => $request->unitWater,
            'bill_serviceWater' => $request->unitServiceWater,
            'bill_unitUsedWater' => $request->bill_unitsWater - $request->rooms_unitsWater, //หน่วยน้ำที่ใช้
            'bill_water' =>   ($request->bill_unitsWater - $request->rooms_unitsWater ) * $request->unitServiceWater +
                             ($request->bill_unitsWater - $request->rooms_unitsWater ) * $request->unitWater ,

            'bill_unitselEctricity' => $request->unitelEctricity,
            'bill_serviceElectricity' => $request->unitServiceElectricity,
            'bill_unitUsedEctricity' =>  $request->bill_unitselEctricity - $request->rooms_unitsElectricity, //หน่วยไฟฟ้าที่ใช้
            'bill_electricity' =>   ($request->bill_unitselEctricity - $request->rooms_unitsElectricity ) * $request->unitServiceElectricity +
                             ($request->bill_unitselEctricity - $request->rooms_unitsElectricity ) * $request->unitelEctricity ,

            'bill_roomcost' =>  $request->room_id,
            'bill_date' =>  $date,
            'created_at'=> $date,
            // 'bill_water' => $request->dormitory_unitsWater,
        ]);

        DB::table('rooms')
            // ->join('rooms','rooms.rooms_code','=','customers.room_id')
            ->where('rooms_code','=',$id)
            ->update([
            'rooms_code' => $request->rooms_code,

        ]);


        // dd($request->all());
        return view('bill.create',compact('customers','dormitorys'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'rooms_code' => 'required|unique:rooms',
        //     'rooms_floor' => 'required',
        //     'rooms_roomtype' => 'required',
        //     'rooms_unitsElectricity' => 'required',
        //     'rooms_unitsWater' => 'required',
        // ]);

        // $room = new RoomModel();
        // $room->rooms_code = $request->rooms_code;
        // $room->rooms_floor = $request->rooms_floor;
        // $room->rooms_roomtype = $request->rooms_roomtype;
        // $room->rooms_unitsElectricity = $request->rooms_unitsElectricity;
        // $room->rooms_unitsWater = $request->rooms_unitsWater;

        // $room->save();

        return redirect('room/create');
    }


    // public function room($id)
    // {
    //     $customers = DB::table("customers")->where('room_id','=',$id)->get();
    //     $rooms =  DB::table("rooms")->where("rooms_floor",1)->orderBy('rooms_code')->get();

    //     // $customers = CustomerModel::all();
    //     return view('floor.room',compact('customers','rooms'));
    // }
}
