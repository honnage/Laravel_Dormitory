@extends('layouts.app')

@section('content')
@foreach($customers as $customer)
@endforeach
<script type="text/javascript">
</script>


<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>แก้ไขข้อมูลผู้อาศัย
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
            <a href="{{ route('booking.create') }}" class="col-sm-2 btn btn-outline-success" style="float:right"> ทำสัญญา</a>
            <a href="{{ route('booking.index') }}" class="col-sm-2 btn btn-outline-primary" style="float:right"> ประวัติ</a>

    </h1>
    </div>


  {{-- <div id="data"> --}}
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                <form action="{{ route('customer.update',$customer->id) }}" method="post" id="data">

                    {{csrf_field()}}
                    @method('PUT')

                    <div class="card-header">
                        ข้อมูลห้องพัก
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">

                            <label class="col-sm-2" style="float:right">ห้อง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="room_id" id="room_id" style="color: blue; font-size: 20px" value="{{ $customer->room_id }}" readonly>
                            {{-- <label class="col-sm-1"></label> --}}


                            <label class="col-sm-3" style="float:right">สถานะการอยู่อาศัย : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusResidence" readonly>
                                    {{-- <option value="-">--โปรดเลือกระยะเวลาสัญญา--</option> --}}
                                    {{-- <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option> --}}
                                    @if( $customer->booking_statusResidence == 0)
                                        <option value = "{{$customer->booking_statusResidence}}" style="color: blue;">
                                            ไม่ได้อาศัยอยู่
                                        </option>
                                    @elseif($customer->booking_statusResidence == 1)
                                        <option value = "{{$customer->booking_statusResidence}}" style="color: blue;">
                                            กำลังอาศัย
                                        </option>
                                    @endif
                                    <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">ชื่อ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="customer_firstname" id="customer_firstname" style="color: blue; font-size: 20px" value="{{ $customer->customer_firstname }}" readonly>

                            <label class="col-sm-3">นามสกุล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="customer_lastname" id="customer_lastname" style="color: blue; font-size: 20px" value="{{ $customer->customer_lastname }}" readonly>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">เบอร์โทรศัพท์ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="customer_phone" id="customer_phone" style="color: blue; font-size: 20px" value="{{ $customer->customer_phone }}" readonly>

                            <label class="col-sm-3">อีเมล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="customer_email" id="customer_email" style="color: blue; font-size: 20px" value="{{ $customer->customer_email }}" readonly>
                        </div>


                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">เดือน : &nbsp;<strong style="color: red">*</strong></label>
                            <?php
                                echo "<meta charset='utf-8'>";
                                function ThDate()
                                {
                                    //วันภาษาไทย
                                    $ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
                                    //เดือนภาษาไทย
                                    $ThMonth = array ( "มกรามก", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );

                                    //กำหนดคุณสมบัติ
                                    $week = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
                                    $months = date( "m" )-1; // ค่าเดือน (1-12)
                                    $day = date( "d" ); // ค่าวันที่(1-31)
                                    $years = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

                                    // return "วัน$ThDay[$week] ที่ $day เดือน $ThMonth[$months] พ.ศ. $years";
                                    return "$ThMonth[$months] / พ.ศ. $years";

                                }
                                $Month = ThDate();
                                // echo $Month;
                                // echo ThDate(); // แสดงวันที่
                            ?>
                            <input type="text" class="form-control col-sm-3" name="room_id" id="room_id" style="color: blue; font-size: 20px" value="{{  $Month }}">

                            <label class="col-sm-3">ค่าห้อง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="roomcost" id="roomcost"style="color: blue; font-size: 20px" value="{{ $customer->roomcost }}" readonly>

                        </div>


                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">หน่วยน้ำ<br>เดือนก่อน : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="rooms_unitsWater" id="rooms_unitsWater"style="color: blue; font-size: 20px" value="{{ $customer->rooms_unitsWater }}" readonly>

                            <label class="col-sm-2">หน่วยน้ำ<br>เดือนนี้ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="rooms_unitsWater" id="rooms_unitsWater" >

                            {{-- <label class="col-sm-2">ส่วนต่าง&nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-2" name="rooms_unitsElectricity" id="rooms_unitsElectricity"> --}}
                        </div>

                         <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">หน่วยไฟฟ้า<br>เดือนก่อน : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="rooms_unitsElectricity" id="rooms_unitsElectricity"style="color: blue; font-size: 20px" value="{{ $customer->rooms_unitsElectricity }}" readonly>

                            <label class="col-sm-2">หน่วยไฟฟ้า<br>เดือนนี้ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="rooms_unitsElectricity" id="rooms_unitsElectricity">


                            {{-- <label class="col-sm-2">ส่วนต่าง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-2" name="rooms_unitsElectricity" id="rooms_unitsElectricity"> --}}
                        </div>

                    </div>
                    <center>
                        <button type="reset" class="btn btn-secondary col-sm-2">ยกเลิก</button>
                        <button type="submit" value="submit"  class="btn btn-success save col-sm-2 my-4">อัพเดท</button>
                    </center>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#validate_form').parsley();
    })
</script>

@endsection
