<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DormitoryModel;

class DormitoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dormitorys = DormitoryModel::all();
        return view('dormitory.index' ,compact('dormitorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dormitory.create');
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
            'dormitory_unitsWater' => 'required',
            'dormitory_serviceWater' => 'required',
            'dormitory_unitselEctricity' => 'required',
            'dormitory_serviceElectricity' => 'required',
        ]);

        $dormitory = new DormitoryModel();
        $dormitory->dormitory_unitsWater = $request->dormitory_unitsWater;
        $dormitory->dormitory_serviceWater = $request->dormitory_serviceWater;
        $dormitory->dormitory_unitselEctricity = $request->dormitory_unitselEctricity;
        $dormitory->dormitory_serviceElectricity = $request->dormitory_serviceElectricity;

        $dormitory->save();
        return redirect('dormitory');
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
        $dormitorys = DB::table("dormitory")->where('id','=',$id)->get();
        return view('dormitory.edit',compact('dormitorys'));
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
            'dormitory_unitsWater' => 'required',
            'dormitory_serviceWater' => 'required',
            'dormitory_unitselEctricity' => 'required',
            'dormitory_serviceElectricity' => 'required',
        ]);

        DB::table('dormitory')
            ->where('id','=',$id)
            ->update([
            'dormitory_unitsWater' => $request->dormitory_unitsWater,
            'dormitory_serviceWater' => $request->dormitory_serviceWater,
            'dormitory_unitselEctricity' => $request->dormitory_unitselEctricity,
            'dormitory_serviceElectricity' => $request->dormitory_serviceElectricity,

        ]);
        // Session()->flash("success","อัพเดทข้อมูลเรียบร้อยแล้ว!");
        return redirect('dormitory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
