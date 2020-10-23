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
        $customers = DB::table("customers")
        ->join('rooms','rooms.rooms_code','=','customers.room_id')
        // ->where('room_id','=',$id)->get();
        // $rooms = DB::table('rooms')


        // $type = LoanTypeModel::orderBy('id')->get();
        // $SendDocument = DB::table('SendDocuments')

        // ->join('Profiles','Profiles.user_id','=','SendDocuments.profile_id')
        // ->join('LoanType','LoanType.id','=','SendDocuments.type_id')
        // ->join('Accounts','Accounts.SendDocuments_id','=','SendDocuments.SendDocuments_id')
        // ->select('*','SendDocuments.id as SendID','SendDocuments.created_at as SendDocumentsAt')
        // // ->where('Activity.id' ,'=',$id)
        // // ->groupBy('SendDocuments.id')

        // ->orderBy('SendDocuments.id', 'DESC')
        // // ->orderBy('SendDocuments.school_year', 'หDESC')
        // ->where('SendDocuments.id' ,'=',$id)

        ->get();
        return view('room.room',compact('customers'));
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
