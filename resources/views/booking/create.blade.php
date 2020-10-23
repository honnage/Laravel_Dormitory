@extends('layouts.app')

@section('content')
<script type="text/javascript">
    $(function() {

        $('.slideUp_table').click(function()
        {
            $('#data').slideUp("slow");

            //Sliding effect just replace fadeOut() to slideUp()
        });

        $('.slideDown_table').click(function()
        {
            $('#data').slideDown("slow");
            //Sliding effect just replace fadeIn() to slideDown()
        });

    });



    // $("div").animate({width:"200px", height:"200px",2000});

</script>


<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>การทำสัญญา
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
        {{-- <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye" style="float:right"> เปิดฟอร์ม</button>
        <button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash" style="float:right"> ปิดฟอร์ม</button> --}}
        <a href="/booking" class="col-sm-2 btn btn-outline-info" style="float:right"> ประวิตัทั้งหมด</a>

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
                <form action="{{ route('booking.store') }}" id="validate_form"  method="post" id="data">
                    <div class="card-header">
                        บันทึกข้อมูลการทำสัญญา
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">เลขบัตรประชาชน : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-6" name="customer_IDcard" id="customer_IDcard" placeholder="โปรดระบุ เลขบัตรประชาชน">

                            <label class="col-sm-2">เพศ : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-2">
                                <select class="form-control" name="customer_gender">
                                    {{-- <option value="">โปรดเลือกระบุเพศ</option> --}}
                                    <option value="M">--- ชาย ---</option>
                                    <option value="F">--- หญิง ---</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">ชื่อ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_firstname" id="customer_firstname" placeholder="โปรดระบุ ชื่อจริง">

                            <label class="col-sm-2">นามสกุล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_lastname" id="customer_lastname" placeholder="โปรดระบุ นามสกุลจริง">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">เบอร์โทรศัพท์ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_phone" id="customer_phone" placeholder="โปรดระบุ เบอร์โทรศัพท์">

                            <label class="col-sm-2">อีเมล : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-4" name="customer_email" id="customer_email" placeholder="โปรดระบุ อีเมล">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                            <label class="col-sm-2">ที่อยู่ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-10" name="customer_address" id="customer_address" placeholder="โปรดระบุ ที่อยู่">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ห้อง : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="room_id" id="room_id" placeholder="เช้น 101">
                            {{-- <label class="col-sm-1"></label> --}}

                            <label class="col-sm-3" style="float:right">สถานะการจ่ายเงินมัดจำ : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusPayment">
                                    {{-- <option value="N">--โปรดเลือกระยะเวลาสัญญา--</option> --}}
                                    <option value="N">--- ยังไม่ได้จ่ายค่ามัดจำ ---</option>
                                    <option value="P">--- จ่ายเงินค่ามันจำแล้ว ---</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ระยะเวลาสัญญา : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_timeperiod">
                                    <option value="-">--โปรดเลือกระยะเวลาสัญญา--</option>
                                    <option value="6M">6 เดือน </option>
                                    <option value="1Y">12 เดือน </option>
                                </select>
                            </div>
                            {{-- <label class="col-sm-1"></label> --}}

                            <label class="col-sm-3" style="float:right">สถานะการอยู่อาศัย : &nbsp;<strong style="color: red">*</strong></label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusResidence">
                                    {{-- <option value="-">--โปรดเลือกระยะเวลาสัญญา--</option> --}}
                                    <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เงินค่ามัดจำ : &nbsp;<strong style="color: red">*</strong></label>
                            <input type="text" class="form-control col-sm-3" name="booking_deposit" id="booking_deposit" placeholder="โปรดระบุ เงินค่ามัดจำ">
                            <label class="col-sm-1"></label>
                        </div>

                    </div>
                    <center>
                        <button type="reset" class="btn btn-secondary col-sm-2">ยกเลิก</button>
                        <button type="submit" value="submit"  class="btn btn-success save col-sm-2 my-4">บันทึก</button>
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

