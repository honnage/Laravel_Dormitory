@extends('layouts.app')

@section('content')
@foreach($customers as $customer)
@endforeach

@foreach($dormitorys as $dormitory)
@endforeach

<script type="text/javascript">
</script>


<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>ข้อมูลผู้อาศัย
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
            {{-- <a href="{{ route('booking.create') }}" class="col-sm-2 btn btn-outline-success" style="float:right"> ทำสัญญา</a> --}}
            {{-- <a href="{{ route('booking.index') }}" class="col-sm-2 btn btn-outline-primary" style="float:right"> ประวัติ</a> --}}

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
                        ประวิตข้อมูลผู้อยู่อาศัย
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ID :</label>
                            <input type="text" class="form-control col-sm-3" name="room_id" id="room_id" style="color: blue; font-size: 20px" value="{{ $customer->id }}" readonly>
                            {{-- <label class="col-sm-1"></label> --}}


                            <label class="col-sm-3" style="float:right">สถานะการอยู่อาศัย :</label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusResidence" readonly>
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
                                    {{-- <option value="0">------ ไม่ได้อาศัยอยู่ ------</option>
                                    <option value="1">------ กำลังอาศัย ------</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2" style="float:right">ระยะเวลาสัญญา :</label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_timeperiod" readonly>
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
                                    {{-- <option value="6M">------  6 เดือน ------</option>
                                    <option value="1Y">------ 12 เดือน ------</option> --}}
                                </select>
                            </div>
                            {{-- <label class="col-sm-1"></label> --}}

                            <label class="col-sm-3" style="float:right">สถานะการจ่ายเงินมัดจำ :</label>
                            <div class = "col-sm-3">
                                <select class="form-control" name="booking_statusPayment" readonly>
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
                                {{-- <option value="N">---- ยังไม่ได้จ่ายค่ามัดจำ ----</option>
                                <option value="P">---- จ่ายเงินค่ามันจำแล้ว ----</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เลขบัตรประชาชน :</label>
                            <input type="text" class="form-control col-sm-4" name="customer_IDcard" id="customer_IDcard" style="color: blue; font-size: 20px" value="{{ $customer->customer_IDcard }}" readonly>

                            <label class="col-sm-2">เพศ :</label>
                            <div class = "col-sm-2">
                                <select class="form-control" name="customer_gender" readonly>
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
                                    {{-- <option value="M">---- เพศชาย ----</option>
                                    <option value="F">---- เพศหญิง ----</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">ชื่อ :</label>
                            <input type="text" class="form-control col-sm-4" name="customer_firstname" id="customer_firstname" style="color: blue; font-size: 20px" value="{{ $customer->customer_firstname }}" readonly>

                            <label class="col-sm-2">นามสกุล :</label>
                            <input type="text" class="form-control col-sm-4" name="customer_lastname" id="customer_lastname" style="color: blue; font-size: 20px" value="{{ $customer->customer_lastname }}" readonly>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เบอร์โทรศัพท์ :</label>
                            <input type="text" class="form-control col-sm-4" name="customer_phone" id="customer_phone" style="color: blue; font-size: 20px" value="{{ $customer->customer_phone }}" readonly>

                            <label class="col-sm-2">อีเมล :</label>
                            <input type="text" class="form-control col-sm-4" name="customer_email" id="customer_email" style="color: blue; font-size: 20px" value="{{ $customer->customer_email }}" readonly>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">ที่อยู่ :</label>
                            <input type="text" class="form-control col-sm-10" name="customer_address" id="customer_address" style="color: blue; font-size: 20px" value="{{ $customer->customer_address }}" readonly>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เงินค่ามัดจำ :</label>
                            <input type="text" class="form-control col-sm-4" name="booking_deposit" id="booking_deposit" style="color: blue; font-size: 20px" value="{{ $customer->booking_deposit }}" readonly>

                            <label class="col-sm-2">ค่าห้อง :</label>
                            <input type="text" class="form-control col-sm-4" name="roomcost" id="roomcost" style="color: blue; font-size: 20px" value="{{ $customer->roomcost }}" readonly>

                        </div>


                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2"></label>
                            <label class="col-sm-2">หน่วยค่าน้ำ :</label>
                            <input type="text" class="form-control col-sm-2" name="dormitory_unitsWater" id="dormitory_unitsWater" style="color: blue; font-size: 20px" value="{{$dormitory->dormitory_unitsWater}}" readonly>

                            <label class="col-sm-2">หน่วยค่าบริการน้ำ :</label>
                            <input type="text" class="form-control col-sm-2" name="dormitory_serviceWater" id="dormitory_serviceWater" style="color: blue; font-size: 20px" value="{{$dormitory->dormitory_serviceWater}}" readonly>
                            <label class="col-sm-2"></label>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2"></label>
                            <label class="col-sm-2">หน่วยไฟฟ้า :</label>
                            <input type="text" class="form-control col-sm-2" name="dormitory_unitselEctricity" id="dormitory_unitselEctricity" style="color: blue; font-size: 20px" value="{{$dormitory->dormitory_unitselEctricity}}" readonly>

                            <label class="col-sm-2">หน่วยค่าบริการไฟฟ้า :</label>
                            <input type="text" class="form-control col-sm-2" name="dormitory_serviceElectricity" id="dormitory_serviceElectricity" style="color: blue; font-size: 20px" value="{{$dormitory->dormitory_serviceElectricity}}" readonly>
                            <label class="col-sm-2"></label>
                        </div>

                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>


    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
            {{-- <div class="card-header" ><strong> ข้อมูลผู้อยู่อาศัยทั้งหมด </strong></div> --}}
            <div class="card">
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: rgb(35, 158, 117); color: white">
                        <th scope="col"><center>บิล</center></th>
                        <th scope="col"><center>ห้อง</center></th>
                        <th scope="col"><center>เดือน</center></th>
                        <th scope="col"><center>ค่าน้ำ</center></th>
                        <th scope="col"><center>ค่าไฟฟ้า</center></th>
                        <th scope="col"><center>สถานะชำระ</center></th>
                        <th scope="col"><center>ยอดรวม</center></th>
                        <th scope="col"><center>หน่วย</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @foreach($bills as $bill)
                        <tr>
                            <?php $total = $total + $bill->bill_water + $bill->bill_electricity + $bill->bill_roomcost + $bill->bill_fines?>
                            {{-- <th>{{$customer->id}}</th> --}}
                            <td><center>{{$bill->bill_code}}</center></td>
                            <td><center>{{$bill->room_id}}</center></td>
                            <td><center>{{$bill->bill_title}}</center></td>
                            <td><center>{{ number_format($bill->bill_water)}}</center></td>
                            <td><center>{{ number_format($bill->bill_electricity)}}</center></td>
                            <td><center>
                                {{-- {{$customer->biil_status}} --}}
                                @if($bill->biil_status == "2")
                                    เกินกำหนด
                                @elseif($bill->biil_status == "1")
                                    จ่ายแล้ว
                                @else
                                    ค้างชำระ
                                @endif
                            </center>
                            </td>
                            <td><center>{{ number_format($bill->bill_water + $bill->bill_electricity + $bill->bill_roomcost + $bill->bill_fines) }}</center></td>
                            <td><center>บาท</center></td>
                        </tr>
                        <?php $sum = $total ?>
                        @endforeach
                        <tr style = "background:  #F0FFF0">
                            <td colspan="6">ยอดเงินรวม </td>
                            <td>{{ number_format($total) }} </td>
                            <td>บาท</td>
                            {{-- <td colspan="1"></td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="/customer" class="col-sm-2 my-3 btn btn-primary"> ย้อนกลับ</a>
        </div>

</div>


@endsection
