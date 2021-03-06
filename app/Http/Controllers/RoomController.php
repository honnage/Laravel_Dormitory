<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomModel;
use App\Models\CustomerModel;
use App\Models\DormitoryModel;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $rooms =  DB::table("rooms")
        // ->join('customers','customers.room_id','=','rooms.rooms_code')
        // ->select('*','rooms.id as id','customers.id as cudID',)
        // ->where('customers.room_id' ,'=','rooms.rooms_code')
        ->orderBy('rooms_code')
        ->get();
        // $rooms =  DB::table("rooms")->where("rooms_floor",1)->orderBy('rooms_code')->get();

        $customers = CustomerModel::all();
        $arrayData  = $customers[0];
        return view('room.index',compact('rooms','customers','arrayData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms =  DB::table("rooms")->orderBy('rooms_code')->get();
        return view('room.create',compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rooms_code' => 'required|unique:rooms',
            'rooms_floor' => 'required',
            'rooms_roomtype' => 'required',
            'rooms_unitsElectricity' => 'required',
            'rooms_unitsWater' => 'required',
        ]);

        $room = new RoomModel();
        $room->rooms_code = $request->rooms_code;
        $room->rooms_floor = $request->rooms_floor;
        $room->rooms_roomtype = $request->rooms_roomtype;
        $room->rooms_unitsElectricity = $request->rooms_unitsElectricity;
        $room->rooms_unitsWater = $request->rooms_unitsWater;

        $room->save();
        return redirect('room/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $bills = DB::table("bill")->get();
        // $customers = DB::table("customers")
        // ->join('rooms','rooms.rooms_code','=','customers.room_id')
        // // ->join('bill','bill.room_id','=','customers.room_id')
        // ->select('*','customers.id as id','rooms.id as roomid')
        // ->where('customers.id' ,'=',$id)
        // // // ->groupBy('SendDocuments.id')
        // ->get();

        $bills = DB::table("bill")
        ->join('rooms','rooms.rooms_code','=','bill.room_id')
        ->join('customers','customers.room_id','=','bill.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('biil.room_id','=',$key)
        ->get();

        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        ->select('*','customers.id as id','rooms.id as roomid')
        ->where('customers.id' ,'=',$id)
        ->get();

        $dormitorys = DormitoryModel::all();
        return view('room.room',compact('dormitorys','customers','bills'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataall = RoomModel::all();
        $rooms = DB::table("rooms")->where('id','=',$id)->get();
        return view('room.edit',compact('rooms','dataall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'rooms_code' => 'required',
            'rooms_floor' => 'required',
            'rooms_roomtype' => 'required',
            'rooms_unitsElectricity' => 'required',
            'rooms_unitsWater' => 'required',
        ]);

        DB::table('rooms')
            ->where('id','=',$id)
            ->update([
            'rooms_code' => $request->rooms_code,
            'rooms_floor' => $request->rooms_floor,
            'rooms_roomtype' => $request->rooms_roomtype,
            'rooms_unitsElectricity' => $request->rooms_unitsElectricity,
            'rooms_unitsWater' => $request->rooms_unitsWater,

        ]);
        // Session()->flash("success","อัพเดทข้อมูลเรียบร้อยแล้ว!");
        return redirect('room/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('rooms')->where('id','=',$id)->delete();
        // Session()->flash("success","ลบข้อมูลเรียบร้อยแล้ว!");
        return redirect('room/create');
    }
}
