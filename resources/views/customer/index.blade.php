@extends('layouts.app')

@section('content')


<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>ข้อมูลผู้อยู่อาศัย
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
        <a href="{{ route('booking.create') }}" class="col-sm-2 btn btn-outline-primary" style="float:right"> ทำสัญญา</a>
        <a href="{{ route('booking.index') }}" class="col-sm-2 btn btn-outline-info" style="float:right"> ประวัติ</a>
    </h1>
    </div>



    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card-header" ><strong> ข้อมูลผู้อยู่อาศัยทั้งหมด </strong></div>
            <div class="card">
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: rgb(35, 158, 117); color: white">
                        <th scope="col"><center>ID</center></th>
                        <th scope="col"><center>ชื่อ</center></th>
                        <th scope="col"><center>นามสกุล</center></th>
                        <th scope="col"><center>เบอร์โทร</center></th>
                        <th scope="col"><center>อีเมล</center></th>
                        <th scope="col"><center>สถานะการอยู่อาศัย</center></th>
                        <th scope="col"><center>ตัวดำเนินการ</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <th>{{$customer->id}}</th>
                            <td><center>{{$customer->customer_firstname}}</center></td>
                            <td><center>{{$customer->customer_lastname}}</center></td>
                            <td><center>{{$customer->customer_phone}}</center></td>
                            <td><center>{{$customer->customer_email}}</center></td>
                            <td>
                                <center>
                                @if( $customer->booking_statusResidence == 0)
                                    <option value = "{{$customer->booking_statusResidence}}">
                                        ไม่ได้อาศัยอยู่
                                    </option>
                                @elseif($customer->booking_statusResidence == 1)
                                    <option value = "{{$customer->booking_statusResidence}}">
                                        กำลังอาศัย
                                    </option>
                                @endif
                                </center>
                                {{-- <center>{{$booking->booking_statusResidence}}</center> --}}
                            </td>
                            <td>
                                <center>
                                <form method="post" action="{{ route('customer.destroy',$customer->id) }}">
                                    @csrf

                                    <a class="btn btn-warning " href="{{ route('customer.edit',$customer->id) }}" >แก้ไขข้อมูล</a>

                                    {{-- @method('DELETE')
                                    <button value="DELETE"  data-name="{{$room->rooms_code}}" class="btn btn-danger deleteform col-sm-3" type="submit">ลบข้อมูล</button> --}}

                                </form>
                                </center>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

