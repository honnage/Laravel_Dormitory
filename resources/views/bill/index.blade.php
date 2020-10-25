@extends('layouts.app')

@section('content')

<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
        <h1>ข้อมูลการเงิน</h1>
    </div>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card-header" ><strong> ข้อมูลธุระกรรมทั้งหมด </strong></div>
            <div class="card">
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: rgb(35, 158, 117); color: white">
                        {{-- <th scope="col"><center>#</center></th> --}}
                        <th scope="col"><center>บิล</center></th>
                        <th scope="col"><center>ชื่อ</center></th>
                        <th scope="col"><center>นามสกุล</center></th>
                        <th scope="col"><center>ห้อง</center></th>
                        <th scope="col"><center>เดือน / ปี</center></th>
                        <th scope="col"><center>ยอดเงินรวม</center></th>
                        <th scope="col"><center>สถานะ</center></th>
                        <th scope="col"><center>ตัวดำเนินการ</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            {{-- <th>{{$customer->id}}</th> --}}
                            <th>{{$customer->bill_code}}</th>
                            <td>{{$customer->customer_firstname}}</td>
                            <td>{{$customer->customer_lastname}}</td>
                            <td><center>{{$customer->room_id}}</center></td>
                            <td><center>{{$customer->bill_title}}</center></td>
                            <td><center>{{ number_format($customer->bill_water + $customer->bill_electricity + $customer->bill_roomcost + $customer->bill_fines) }}</center></td>
                            <td><center>
                                    {{-- {{$customer->biil_status}} --}}
                                    @if($customer->biil_status == "2")
                                        เกินกำหนด
                                    @elseif($customer->biil_status == "1")
                                        จ่ายแล้ว
                                    @else
                                        ค้างชำระ
                                    @endif
                                </center>
                            </td>
                            <td>
                                <center>
                                <form method="post" action="/bill/destroy/{{$customer->id}}">
                                    @csrf

                                    <a class="btn btn-warning " href="/bill/edit/{{$customer->cusID}}" >แก้ไขข้อมูล</a>


{{--
                                    @method('DELETE')
                                    <button value="DELETE"  data-name="{{$customer->id}}" class="btn btn-danger deleteform col-sm-3" type="submit">ลบข้อมูล</button> --}}
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

