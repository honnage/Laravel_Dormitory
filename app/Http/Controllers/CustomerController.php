<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers =  DB::table("customers")->orderBy('id','DESC')->get();
        // $bookings = CustomerModel::orderBy('id', 'DESC')->get();
        return view('customer.index' ,compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $customers = DB::table("customers")->where('id','=',$id)->get();
        return view('customer.edit',compact('customers'));
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
            'customer_IDcard' => 'required',
            'customer_firstname' => 'required',
            'customer_lastname' => 'required',
            'customer_gender' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'room_id' => 'required',
            'booking_deposit' => 'required',
            'booking_timeperiod' => 'required',
            'booking_statusResidence' => 'required',
            'booking_statusPayment' => 'required',
        ]);

        DB::table('customers')
            ->where('id','=',$id)
            ->update([
            'customer_IDcard' => $request->customer_IDcard,
            'customer_firstname' => $request->customer_firstname,
            'customer_lastname' => $request->customer_lastname,
            'customer_gender' => $request->customer_gender,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
            'customer_address' => $request->customer_address,
            'room_id' => $request->room_id,
            'booking_deposit' => $request->booking_deposit,
            'booking_timeperiod' => $request->booking_timeperiod,
            'booking_statusResidence' => $request->booking_statusResidence,
            'booking_statusPayment' => $request->booking_statusPayment,

        ]);
        // Session()->flash("success","อัพเดทข้อมูลเรียบร้อยแล้ว!");
        return redirect('customer');
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
