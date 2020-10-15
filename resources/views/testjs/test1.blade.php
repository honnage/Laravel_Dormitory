
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
    </script>

    <title>60160305</title>

</head>
<body>
  <div class="container">
    <br>
    <div id="p1">
      <h1>เพื่มข้อมูลห้อง</h1>
    </div>

    <div class="form-inline">
      <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
        {{-- <button class="col-sm-2 btn btn-secondary far fa-address-book" onclick="ChageBackground()" style="background: #11A088 ;"> Dark</button>
        <button class="col-sm-2 btn btn-secondary fas fa-address-book" onclick="reset()" style="background: #17C2A6  ;">  Light</button> --}}
        <a class="col-sm-4"></a>
		<button href="#" class="col-sm-2 slideUp_table btn btn-secondary fas fa-eye-slash"> เปิดฟอร์มเพื่มข้อมูล</button>
        <button href="#" class="col-sm-2 slideDown_table btn btn-success fas fa-eye"> ปิดฟอร์มเพื่มข้อมูล</button>
      </div>
    </div>

    <div id="data">
        <form action="/subjects" method="post" >
            {{csrf_field()}}
            <div class="form-inline">
                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label class="col-sm-2">เลขที่ห้อง</label>
                    <input type="text" class="form-control col-sm-6" name="nameTH" id="nameTH" placeholder="เช่น: ทดสอบ">

                    <label class="col-sm-2">ชั้น</label>
                    <div class = "col-sm-2">
                        <select class="form-control" name="description">
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
                    <select class="form-control" name="description">
                        <option value="1">-------  ห้องพักพัดลม  -------</option>
                        <option value="2">-------  ห้องพักปรับอากาศ  -------</option>
                    </select>
                    <label class="col-sm-3"></label>
                    <button class="btn btn-secondary col-sm-2" type="reset">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-success col-sm-2">ยืนยัน</button>
                    {{-- <input type="submit" value="submit"  class="btn btn-success col-sm-2 confirm"> --}}

                </div>
            </div>
        </form>
    </div>

    <div id="table">
        <table class="table table-striped table-dark">
          <thead>
            <tr class="bg-success">
              <th scope="col" style="text-align: center; color: white;" id="pa">No.</th>
              <th scope="col" style="text-align: center; color: white;" id="pa">Title</th>
              <th scope="col" style="text-align: center; color: white;">Name</th>
              <th scope="col" style="text-align: center; color: white;">Work</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <th scope="row">Lab 1</th>
              <td>คำถามท้ายบทที่ 1 IT ในชีวิตประจำวัน </td>
              <td><center><a href="lab1_60160305.pdf" class="btn btn-success">ไปที่งาน</a></center></td>
            </tr>

            <tr style="background-color: #ffffff2f ;" id="p1">
              <th scope="row">2</th>
              <th scope="row">Lab 2</th>
              <td >คำถามท้ายบทที่ 2 ผลกระทบของไอทีต่อสังคมดิจิตอล</td>
              <td><center><a href="lab2_60160305.pdf" class="btn btn-success">ไปที่งาน</a></center></td>
            </tr>


          </tbody>
        </table>
      </div>

  </div>

  </div>

  @endsection
