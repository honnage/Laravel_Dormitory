<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingModel;
use App\Models\CustomerModel;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new CustomerModel();
        $request->validate([
            'customer_IDcard' => 'required',
            'customer_firstname' => 'required',
            'customer_lastname' => 'required',
            'customer_gender' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'room_id'=>'required',
            'booking_deposit'=>'required',
            'booking_timeperiod'=>'required',
        ]);
        $customer->customer_IDcard = $request->customer_IDcard;
        $customer->customer_firstname = $request->customer_firstname;
        $customer->customer_lastname = $request->customer_lastname;
        $customer->customer_gender = $request->customer_gender;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_email = $request->customer_email;
        $customer->customer_address = $request->customer_address;
        $customer->room_id = $request->room_id;
        $customer->booking_deposit = $request->booking_deposit;
        $customer->booking_timeperiod = $request->booking_timeperiod;
        $customer->booking_status = "0";
        // $customer->profile_id = Auth::user()->id;
        $customer->save();


        return redirect('booking');
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
        //
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
        //
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
