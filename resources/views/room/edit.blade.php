
@extends('layouts.app')

@section('content')
@foreach($rooms as $room)
@endforeach
<script type="text/javascript">
    $(function() {

        $('.slideDown_table').click(function()
        {
            $('#data').slideDown("slow");
            //Sliding effect just replace fadeIn() to slideDown()
        });

        $('.slideUp_table').click(function()
        {
            $('#data').slideUp("slow");

            //Sliding effect just replace fadeOut() to slideUp()
        });

    });

    // $("div").animate({width:"200px", height:"200px",2000});

</script>


<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>แก้ไขข้อมูลห้อง
        {{-- <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye" style="float:right"> เปิดฟอร์มเพื่มข้อมูล</button>
        <button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash" style="float:right"> ปิดฟอร์มเพื่มข้อมูล</button> --}}
    </h1>
  </div>

  {{-- <div id="data"> --}}
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    แก้ไขข้อมูลห้อง: <strong style="color: blue">{{ $room->rooms_code }}</strong>
                </div>
                {{-- <form action="/room/update/{{$data->id}}" method="post" > --}}
                <form action="{{ route('room.update',$room->id) }}" method="post" >

                    {{csrf_field()}}
                    @method('PUT')

                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เลขที่ห้อง</label>
                            <input type="text" class="form-control col-sm-6" name="rooms_code" id="rooms_code" style="color: blue; font-size: 20px" value="{{ $room->rooms_code }}">

                            <label class="col-sm-2">ชั้น</label>
                            <div class = "col-sm-2">
                                <select class="form-control" name="rooms_floor">
                                    <option value = "{{$room->rooms_floor}}" style="color: blue;">
                                        -- ปัจจุบัน ชั้น {{$room->rooms_floor}} --
                                    </option>
                                    <option value="1">ชั้น 1</option>
                                    <option value="2">ชั้น 2</option>
                                    <option value="3">ชั้น 3</option>
                                    <option value="4">ชั้น 4</option>
                                    <option value="5">ชั้น 5</option>
                                    <option value="5">ชั้น 6</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">ประเภทห้อง</label>
                            <select class="form-control" name="rooms_roomtype">
                                @if( $room->rooms_roomtype == 2)
                                    <option value = "{{$room->rooms_roomtype}}" style="color: blue;">
                                        -- สถาะนปัจจุบัน ห้องพักปรับอากาศ --
                                    </option>
                                @elseif($room->rooms_roomtype == 1)
                                    <option value = "{{$room->rooms_roomtype}}" style="color: blue;">
                                        -- สถาะนปัจจุบัน ห้องพักพัดลม --
                                    </option>
                                @endif
                                <option value="2">-------  ห้องพักปรับอากาศ  -------</option>
                                <option value="1">-------  ห้องพักพัดลม  -------</option>
                            </select>
                            <label class="col-sm-2"></label>
                            <button class="btn btn-secondary col-sm-2" type="reset">ยกเลิก</button>
                            <button type="submit" value="submit"  class="btn btn-success update col-sm-2">อัพเดท</button>
                            {{-- class="btn btn-outline-light fail col-sm-5" --}}
                            {{-- <input type="submit" value="submit"  class="btn btn-success col-sm-2 confirm"> --}}
                        </div>
                    </div>
                </form>
            </div>
            <a href="/room/create" class="col-sm-2 my-3 btn btn-primary"> ย้อนกลับ</a>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card-header" style="background-color: rgb(35, 158, 117); color: white; font-size: 20px"><strong> ข้อมูลห้องพักทั้งหมด </strong></div>
            <table class="table table-striped">
                <thead>
                <tr style="background-color: black; color: white">
                    {{-- <th scope="col"><center>ID</center></th> --}}
                    <th scope="col"><center>ห้อง</center></th>
                    <th scope="col"><center>ชั้น</center></th>
                    <th scope="col"><center>ประเภทห้อง</center></th>
                    <th scope="col"><center>ตัวดำเนิดการ</center></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($dataall as $data)
                    <tr>
                        {{-- <th>{{$data->id}}</th> --}}
                        <td><center>{{$data->rooms_code}}</center></td>
                        <td><center>{{$data->rooms_floor}}</center></td>
                        <td>
                            <center>
                                @if( $data->rooms_roomtype == 1 )
                                    <p style="color: #000000"> ห้องพักพัดลม</p>
                                @elseif($data->rooms_roomtype == 2)
                                    <p style="color: #000000"> ห้องพักปรับอากาศ </p>
                                @endif
                            </center>
                        </td>
                        <td>
                            <center>
                            <form method="post" action="{{ route('room.destroy',$data->id) }}">
                                @csrf

                                {{-- <a class="btn btn-primary" href="{{ route('dormitory.show',$dorm->id) }}" >แสดงข้อมูล</a> --}}
                                <a class="btn btn-warning" href="{{ route('room.edit',$data->id) }}" >แก้ไขข้อมูล</a>

                                @method('DELETE')
                                <button value="DELETE"  class="btn btn-danger deleteform" type="submit">ลบข้อมูล</button>

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


@endsection

