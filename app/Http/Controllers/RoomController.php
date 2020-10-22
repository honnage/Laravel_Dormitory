<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomModel;
use App\Models\CustomerModel;
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
        $rooms =  DB::table("rooms")->orderBy('rooms_code')->get();

        // $rooms =  DB::table("rooms")->where("rooms_floor",1)->orderBy('rooms_code')->get();

        $customers = CustomerModel::all();
        return view('room.index',compact('rooms','customers'));
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
        ]);

        $room = new RoomModel();
        $room->rooms_code = $request->rooms_code;
        $room->rooms_floor = $request->rooms_floor;
        $room->rooms_roomtype = $request->rooms_roomtype;

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
        //
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

        ]);

        DB::table('rooms')
            ->where('id','=',$id)
            ->update([
            'rooms_code' => $request->rooms_code,
            'rooms_floor' => $request->rooms_floor,
            'rooms_roomtype' => $request->rooms_roomtype,

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
