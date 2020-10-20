@extends('layouts.app')

@section('content')
<script src="{{ asset('js/jquery.js') }}"></script>
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

    function ChageBackground() {
      // document.body.style.background = "green"; //เปลี่ยนสีพื้นหลัง
      document.body.style.backgroundImage = "url('image/bg-1.png')"; //เปลี่ยนรูปิพ้นหลัง
      document.getElementById("p1").style.color="white";
      document.getElementById("color").style.color="white";
    }

    function reset(){
      document.body.style.background = "";
      document.getElementById("p1").style.color="black";
    }

    // $("div").animate({width:"200px", height:"200px",2000});

</script>


<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>เพื่มข้อมูลห้อง
        {{-- <div class="col-sm-4">d </div> --}}
        <button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash"> ปิดฟอร์มเพื่มข้อมูล</button>
        <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye"> เปิดฟอร์มเพื่มข้อมูล</button>
    </h1>


  </div>

  <div class="form-inline">
    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
      {{-- <button class="col-sm-2 btn btn-secondary far fa-address-book" onclick="ChageBackground()" style="background: #11A088 ;"> Dark</button>
      <button class="col-sm-2 btn btn-secondary fas fa-address-book" onclick="reset()" style="background: #17C2A6  ;">  Light</button> --}}
      <a class="col-sm-4"></a>

        {{-- <button onclick="if(document.getElementById('data') .style.display=='none') {
            document.getElementById('data') .style.display=''}
        else{
            document.getElementById('data') .style.display='none'}"
        type="button">Open/Close</button> <br /> --}}

        {{--
        <button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash"> ปิดฟอร์มเพื่มข้อมูล</button>
        <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye"> เปิดฟอร์มเพื่มข้อมูล</button> --}}
    </div>
  </div>

  {{-- <div id="data"> --}}
    <div class="container my-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <form action="/room" method="post" id="data">
                    <div class="card-header">
                        บันทึกข้อมูลห้อง
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-2">เลขที่ห้อง</label>
                            <input type="text" class="form-control col-sm-6" name="rooms_code" id="rooms_code" placeholder="เช่น: ทดสอบ">

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
                                <option value="1">-------  ห้องพักพัดลม  -------</option>
                                <option value="2">-------  ห้องพักปรับอากาศ  -------</option>
                            </select>
                            <label class="col-sm-2"></label>
                            <button class="btn btn-secondary col-sm-2" type="reset">ยกเลิก</button>
                            <button type="submit" name="submit" class="btn btn-success col-sm-2">ยืนยัน</button>
                            {{-- <input type="submit" value="submit"  class="btn btn-success col-sm-2 confirm"> --}}
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header" style="background-color: black; color: white"><strong> ข้อมูลห้องพัก </strong></div>
            {{-- <div class="card-body"> --}}
                <table class="table table-striped">
                    <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col"><center>id</center></th>
                        <th scope="col"><center>ห้อง</center></th>
                        <th scope="col"><center>ชั้น</center></th>
                        <th scope="col"><center>ประเภทห้อง</center></th>
                        {{-- <th scope="col"><center>จำนวน</center></th> --}}
                        <th scope="col"><center>ตัวดำเนิดการ</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <th scope="row">{{$room->id}}</th>
                            <td>{{$room->rooms_code}}</td>
                            <td>{{$room->rooms_floor}}</td>
                            <td>
                                <center>
                                    @if( $room->rooms_roomtype == 1 )
                                        <p style="color: #00cc00"> ห้องพักพัดลม</p>
                                    @elseif($room->rooms_roomtype == 2)
                                        <p style="color: #ff1a1a"> ห้องพักปรับอากาศ </p>
                                    @else
                                        <p>ยังไม่ได้ตรวจ</p>
                                    @endif
                                </center>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            {{-- </div> --}}
        </div>

</div>



@endsection

