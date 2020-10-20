
@extends('layouts.app')

@section('content')
<style type="text/css">
        /* #header {height:150px; background-color:#690;}
        #menu {height:500px;width:300px; float:left; background-color:#610;}
        #content {height:500px; background-color:#0027FF;}
        #menuright{height:500px;width:300px; float:right; background-color:#FF003A;}
        #menurighttop{height:270px;width:300px; background-color:#E4FF00;}
        #footer{height:150px; background-color:#7000FF;} */
</style>

<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
        <h1>เพื่มข้อมูลห้อง</h1>
        <a href="" class="btn btn-outline-light" style="background-color: dimgray">ชั้น 1</a>
        <a href="" class="btn btn-outline-light" style="background-color: cadetblue">ชั้น 2</a>
        <a href="" class="btn btn-outline-light" style="background-color: indianred">ชั้น 3</a>
        <a href="" class="btn btn-outline-light" style="background-color: coral">ชั้น 4</a>
        <a href="" class="btn btn-outline-light" style="background-color: limegreen">ชั้น 5</a>
        <a href="" class="btn btn-outline-light" style="background-color: dodgerblue">ชั้น 6</a>
        <a href="/room/create" class="col-sm-2  btn btn-outline-light" style="background-color: darkorchid; position:absolute ; right:0 "> ห้องทั้งหมด</a>

  </div>

    <div class="container my-4">

        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @if( $room->rooms_roomtype == 1 ) --}}
                    <div style="border: solid 1px rgb(0, 0, 0);
                                width: 200px; height: 140px;
                                background-color: rgb(184, 184, 189);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                        101
                    </div>

            </div>
            <div id="container">
                <div id="header">
                </div>

            </div>
        </div>
    </div>
</div>



@endsection

