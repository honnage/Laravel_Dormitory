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
    <h1>ข้อมูลการทำสัญญา
        {{-- <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3" style="position:absolute ; right:0"> --}}
        <a href="{{ route('dormitory.create') }}" class="col-sm-2 btn btn-outline-primary" style="float:right"> ทำสัญญา</a>
        <a href="{{ route('dormitory.index') }}" class="col-sm-2 btn btn-outline-info" style="float:right"> ประวัติ</a>
    </h1>
    </div>



    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card-header" ><strong> ข้อมูลห้องพักทั้งหมด </strong></div>
            <div class="card">
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: rgb(35, 158, 117); color: white">
                        <th scope="col"><center>ID</center></th>
                        <th scope="col"><center>หน่วยค่าน้ำ</center></th>
                        <th scope="col"><center>หน่วยค่าบริการน้ำ</center></th>
                        <th scope="col"><center>หน่วยไฟฟ้า</center></th>
                        <th scope="col"><center>หน่วยค่าไฟฟ้า</center></th>
                        <th scope="col"><center>ตัวดำเนินการ</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dormitorys as $dormitory)
                        <tr>
                            <th>{{$dormitory->id}}</th>
                            <td><center>{{$dormitory->dormitory_unitsWater}}</center></td>
                            <td><center>{{$dormitory->dormitory_serviceWater}}</center></td>
                            <td><center>{{$dormitory->dormitory_unitselEctricity}}</center></td>
                            <td><center>{{$dormitory->dormitory_serviceElectricity}}</center></td>
                            <td>
                                <center>
                                <form method="post" action="{{ route('dormitory.destroy',$dormitory->id) }}">
                                    @csrf

                                    <a class="btn btn-warning " href="{{ route('dormitory.edit',$dormitory->id) }}" >แก้ไขข้อมูล</a>

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

