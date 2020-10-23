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
                        แก้ไขข้อมูลผู้อยู่อาศัย
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">เลขบัตรประชาชน : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-6" name="customer_IDcard" id="customer_IDcard" style="color: blue; font-size: 20px" value="{{ $customer->customer_IDcard }}">

                            <label class="col-sm-2">เพศ : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-2">
                                <select class="form-control" name="customer_gender">
                                    {{-- <option value="">โปรดเลือกระบุเพศ</option> --}}
                                    {{-- <option value="M">--- ชาย ---</option>
                                    <option value="F">--- หญิง ---</option> --}}

                                    @if( $customer->customer_gender == "M")
                                        <option value = "{{$customer->customer_gender}}" style="color: blue;">
                                            สถานะ เพศชาย
                                        </option>
                                    @elseif($customer->customer_gender == "F")
                                        <option value = "{{$customer->customer_gender}}" style="color: blue;">
                                            สถานะ เพศหญิง
                                        </option>
                                    @endif
                                    <option value="M">---- เพศชาย ----</option>
                                    <option value="F">---- เพศหญิง ----</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">ชื่อ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_firstname" id="customer_firstname" style="color: blue; font-size: 20px" value="{{ $customer->customer_firstname }}">

                            <label class="col-sm-2">นามสกุล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_lastname" id="customer_lastname" style="color: blue; font-size: 20px" value="{{ $customer->customer_lastname }}">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">เบอร์โทรศัพท์ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_phone" id="customer_phone" style="color: blue; font-size: 20px" value="{{ $customer->customer_phone }}">

                            <label class="col-sm-2">อีเมล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_email" id="customer_email" style="color: blue; font-size: 20px" value="{{ $customer->customer_email }}">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">ที่อยู่ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-10" name="customer_address" id="customer_address" style="color: blue; font-size: 20px" value="{{ $customer->customer_address }}">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ห้อง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="room_id" id="room_id" style="color: blue; font-size: 20px" value="{{ $customer->room_id }}">
                            {{-- <label class="col-sm-1"></label> --}}


                            <label class="col-sm-3" style="float:right">สถานะการอยู่อาศัย : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusResidence">
                                    {{-- <option value="-">--โปรดเลือกระยะเวลาสัญญา--</option> --}}
                                    {{-- <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option> --}}
                                    @if( $customer->booking_statusResidence == 0)
                                        <option value = "{{$customer->booking_statusResidence}}" style="color: blue;">
                                            สถานะปัจจุบัน ไม่ได้อาศัยอยู่
                                        </option>
                                    @elseif($customer->booking_statusResidence == 1)
                                        <option value = "{{$customer->booking_statusResidence}}" style="color: blue;">
                                            สถานะปัจจุบัน กำลังอาศัย
                                        </option>
                                    @endif
                                    <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ระยะเวลาสัญญา : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_timeperiod">
                                    {{-- <option value="-">--โปรดเลือกระยะเวลาสัญญา--</option>
                                    <option value="6M">6 เดือน</option>
                                    <option value="1Y">12 เดือน</option> --}}

                                    @if( $customer->booking_timeperiod == "6M")
                                        <option value = "{{$customer->booking_timeperiod}}" style="color: blue;">
                                            สถานะปัจจุบัน 6 เดือน
                                        </option>
                                    @elseif($customer->booking_statusResidence == "1Y")
                                        <option value = "{{$customer->booking_timeperiod}}" style="color: blue;">
                                            สถานะปัจจุบัน 12 เดือน
                                        </option>
                                    @else
                                        <option value = "{{$customer->booking_timeperiod}}" style="color: blue;">
                                            สถานะปัจจุบัน -
                                        </option>
                                    @endif
                                    <option value="6M">------  6 เดือน ------</option>
                                    <option value="1Y">------ 12 เดือน ------</option>
                                </select>
                            </div>
                            {{-- <label class="col-sm-1"></label> --}}

                            <label class="col-sm-3" style="float:right">สถานะการจ่ายเงินมัดจำ : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusPayment">
                                    {{-- <option value="N">--โปรดเลือกระยะเวลาสัญญา--</option> --}}
                                    {{-- <option value="N">--- ยังไม่ได้จ่ายค่ามัดจำ ---</option>
                                    <option value="P">--- จ่ายเงินค่ามันจำแล้ว ---</option> --}}

                                    @if( $customer->booking_statusPayment == "N")
                                        <option value = "{{$customer->booking_statusPayment}}" style="color: blue;">
                                            สถานะ ยังไม่ได้จ่ายค่ามัดจำ
                                        </option>
                                    @elseif($customer->booking_statusPayment == "P")
                                        <option value = "{{$customer->booking_statusPayment}}" style="color: blue;">
                                            สถานะ จ่ายเงินค่ามันจำแล้ว
                                        </option>
                                    @endif
                                <option value="N">---- ยังไม่ได้จ่ายค่ามัดจำ ----</option>
                                <option value="P">---- จ่ายเงินค่ามันจำแล้ว ----</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เงินค่ามัดจำ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="booking_deposit" id="booking_deposit"style="color: blue; font-size: 20px" value="{{ $customer->booking_deposit }}">
                            <label class="col-sm-1"></label>

                            <label class="col-sm-2">ค่าห้อง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="roomcost" id="roomcost" style="color: blue; font-size: 20px" value="{{ $customer->roomcost }}">
                            <label class="col-sm-1"></label>
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
