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
    <h1>ข้อมูลห้องพักทั้งหมด
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
        <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye" style="float:right"> เปิดฟอร์ม</button>
        <button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash" style="float:right"> ปิดฟอร์ม</button>
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
                <form action="/room" method="post" id="data" style="display: none;">
                    <div class="card-header">
                        บันทึกข้อมูลห้อง
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เลขที่ห้อง</label>
                            <input type="text" class="form-control col-sm-6" name="rooms_code" id="rooms_code" placeholder="เช่น: 101">

                            <label class="col-sm-2">ชั้น</label>
                            <div class = "col-sm-2">
                                <select class="form-control" name="rooms_floor">
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
                                <option value="2">-------  ห้องพักปรับอากาศ  -------</option>
                                <option value="1">-------  ห้องพักพัดลม  -------</option>
                            </select>
                            <label class="col-sm-2"></label>
                            <button type="reset" class="btn btn-secondary col-sm-2">ยกเลิก</button>
                            {{-- <button type="submit"  value="submit" name="submit" class="btn btn-success col-sm-2">บันทึก</button> --}}
                            <button type="submit" value="submit"  class="btn btn-success save col-sm-2">บันทึก</button>

                            {{-- <input type="submit" value="submit"  class="btn btn-success col-sm-2 confirm"> --}}
                        </div>
                    </div>
                </form>
                </div>
                <a href="/room" class="col-sm-2 my-3 btn btn-primary"> ย้อนกลับ</a>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{-- <div class="card-header" style="background-color: rgb(35, 158, 117); color: white; font-size: 20px"><strong> ข้อมูลห้องพักทั้งหมด </strong></div> --}}
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgb(35, 158, 117); color: white">
                    {{-- <th scope="col"><center>ID</center></th> --}}
                    <th scope="col"><center>ห้อง</center></th>
                    <th scope="col"><center>ชั้น</center></th>
                    <th scope="col"><center>ประเภทห้อง</center></th>
                    <th scope="col"><center>ตัวดำเนิดการ</center></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                    <tr>
                        {{-- <th>{{$room->id}}</th> --}}
                        <td><center>{{$room->rooms_code}}</center></td>
                        <td><center>{{$room->rooms_floor}}</center></td>
                        <td>
                            <center>
                                @if( $room->rooms_roomtype == 1 )
                                    <p style="color: #000000"> ห้องพักพัดลม</p>
                                @elseif($room->rooms_roomtype == 2)
                                    <p style="color: #000000"> ห้องพักปรับอากาศ </p>
                                @endif
                            </center>
                        </td>
                        <td>
                            <center>
                            <form method="post" action="{{ route('room.destroy',$room->id) }}">
                                @csrf

                                {{-- <a class="btn btn-primary" href="{{ route('dormitory.show',$dorm->id) }}" >แสดงข้อมูล</a> --}}
                                <a class="btn btn-warning col-sm-3" href="{{ route('room.edit',$room->id) }}" >แก้ไขข้อมูล</a>

                                @method('DELETE')
                                <button value="DELETE"  data-name="{{$room->rooms_code}}" class="btn btn-danger deleteform col-sm-3" type="submit">ลบข้อมูล</button>

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

