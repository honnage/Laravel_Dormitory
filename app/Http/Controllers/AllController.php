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
        // $customers = DB::table("customers")->where('booking_statusResidence','=',1)->get();
        $rooms = DB::table("rooms")->where('rooms_floor','=',$id)->get();

        // $customers = CustomerModel::all();
        // return view('room.floor',compact('customers','rooms'));

        $bills = DB::table("bill")->where('customer_id','=',$id)->get();
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('booking_statusResidence','=',1)
        ->orderBy('rooms_code')
        ->get();
        $dormitorys = DormitoryModel::all();
        return view('room.floor',compact('dormitorys','customers','rooms','bills'));

    }

    public function billDashboard()
    {
        // // $customers = DB::table("customers")->where('id','=',$id)->get();
        // $customers = DB::table("customers")
        // ->join('rooms','rooms.rooms_code','=','customers.room_id')
        // // ->select('*','customers.id as id','rooms.id as roomid')
        // ->select('*','customers.id as id','rooms.id as roomid')
        // ->where('customers.id','=',$id)
        // ->get();
        // // $dormitorys = DormitoryModel::all();

        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->join('bill','bill.room_id','=','customers.room_id')
        ->select('*','customers.id as cusID','rooms.id as roomID',
        // ,DB::raw('sum(bill.bill_water + bill.bill_electricity + bill.bill_roomcost + bill.bill_fines) as total'),
        )
        ->get();
        // $rooms = DB::table("rooms");

        return view('bill.index',compact('customers'));
    }

    public function billStore(Request $request, $id)
    {
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->get();
        $dormitorys = DormitoryModel::all();

        $request->validate([
            // 'bill_code' => 'required',
            'room_id' => 'required',
            'titles' => 'required',
            'rooms_unitsWater' => 'required',
            'rooms_unitsElectricity' => 'required',
            'bill_unitselEctricity' => 'required',
            'bill_unitsWater' => 'required',

            // 'unitWater' => 'required',
            // 'unitServiceWater' => 'required',

            'bill_waterBefore' => 'required',
            'bill_electricityBefore' => 'required',

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

            'bill_roomcost' =>  $request->roomcost,
            'bill_date' =>  $date,
            'created_at'=> $date,

            'bill_waterBefore' =>  $request->bill_waterBefore,
            'bill_electricityBefore' =>  $request->bill_electricityBefore,
        ]);

        DB::table('rooms')
            // ->join('rooms','rooms.rooms_code','=','customers.room_id')
            ->where('rooms_code','=',$request->room_id)
            ->update([
            'rooms_unitsElectricity' => $request->rooms_unitsElectricity + ($request->bill_unitselEctricity - $request->rooms_unitsElectricity ),
            'rooms_unitsWater' => $request->rooms_unitsWater +  ($request->bill_unitsWater - $request->rooms_unitsWater ),
        ]);


        // dd($request->all());
        return redirect('bill');
    }

    public function show($id,$key)
    {
        $billrooms = DB::table("bill")
        ->where('bill.room_id' ,'=',$key)
        ->get();

        $bills = DB::table("bill")
        ->join('rooms','rooms.rooms_code','=','bill.room_id')
        ->join('customers','customers.room_id','=','bill.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        // ->where('bill.room_id' ,'=',$id)
        ->get();

        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('customers.id' ,'=',$id)
        ->get();

        $dormitorys = DormitoryModel::all();
        return view('room.room',compact('dormitorys','customers','bills','billrooms'));
    }

    public function edit($id)
    {
        $dormitorys = DormitoryModel::all();

        $bills = DB::table("bill")->where('customer_id','=',$id)->get();
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->join('bill','bill.room_id','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid',)
        ->where('customers.id' ,'=',$id)
        ->get();

        return view('bill.edit',compact('customers','dormitorys','bills'));
    }

    public function updateBill(Request $request, $id )
    {

        $request->validate([
            'biil_status' => 'required',
        ]);

        DB::table('bill')
            ->where('id','=',$id)
            ->update([
            'biil_status' => $request->biil_status,

        ]);
        // dd($request->all());
        // Session()->flash("success","อัพเดทข้อมูลเรียบร้อยแล้ว!");
        return redirect('bill');
    }

    public function destroy($id )
    {

        DB::table('bill')->where('id','=',$id)->delete();

        return redirect('bill');
    }



}
