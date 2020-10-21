
@extends('layouts.app')

@section('content')
@foreach($customers as $customer)
@endforeach
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
        <a href="" class="btn btn-outline-light" style="background-color: indianred">ชั้น 2</a>
        <a href="" class="btn btn-outline-light" style="background-color: coral">ชั้น 3</a>
        <a href="" class="btn btn-outline-light" style="background-color: cadetblue">ชั้น 4</a>
        <a href="" class="btn btn-outline-light" style="background-color: dodgerblue">ชั้น 5</a>
        <a href="" class="btn btn-outline-light" style="background-color: darkorchid">ชั้น 6</a>
        <a href="/room/create" class="col-sm-2  btn btn-outline-success" style="position:absolute ; right:0 "> ห้องทั้งหมด</a>

  </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @if( $room->rooms_roomtype == 1 ) --}}
                    {{-- 101 --}}

                    @if($customer->room_id == 101 &&  $customer->booking_statusResidence == "1")
                        <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                101
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                101
                        </div>
                    @endif

                    {{-- 102 --}}
                    @if($customer->room_id == 102)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                102
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                102
                        </div>
                    @endif

                    {{-- 103 --}}
                    @if($customer->room_id == 103)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                103
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                103
                        </div>
                    @endif


                    @if($customer->room_id == 104)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                104
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                104
                        </div>
                    @endif

                    {{-- 105 --}}
                    @if($customer->room_id == 105)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                105
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                105
                        </div>
                    @endif

                    {{-- 106 --}}
                    @if($customer->room_id == 106)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                106
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                106
                        </div>
                    @endif
                    <br><br> <br><br>

                    {{-- 111 --}}
                    @if($customer->room_id == 111)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                111
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                 width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                111
                        </div>
                    @endif

                     {{-- 110 --}}
                     @if($customer->room_id == 110)
                        <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                                background-color: rgb(40, 243, 50);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                110
                        </div>
                    @else
                        <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                                background-color: rgb(248, 248, 250);
                                font-size: 50px;
                                text-align: center;
                                justify-content:
                                center;align-items:
                                center; text-align: center;
                                display: inline-block;">
                                110
                        </div>
                    @endif

                    <div style="border: solid 1px rgb(255, 255, 255);
                            width: 15%; height: 120px;
                            background-color: rgb(255, 255, 255);
                            center; text-align: center;
                            display: inline-block;">
                            -
                    </div>

                    {{-- 109 --}}
                    @if($customer->room_id == 109)
                    <div style="border: solid 1px rgb(0, 0, 0);
                            width: 15%; height: 120px;
                            background-color: rgb(40, 243, 50);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            109
                    </div>
                @else
                    <div style="border: solid 1px rgb(0, 0, 0);
                            width: 15%; height: 120px;
                            background-color: rgb(248, 248, 250);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            109
                    </div>
                @endif

                {{-- 108 --}}
                @if($customer->room_id == 108)
                    <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                            background-color: rgb(40, 243, 50);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            108
                    </div>
                @else
                    <div style="border: solid 1px rgb(0, 0, 0);
                                width: 15%; height: 120px;
                            background-color: rgb(248, 248, 250);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            108
                    </div>
                @endif

                {{-- 111 --}}
                @if($customer->room_id == 107)
                    <div style="border: solid 1px rgb(0, 0, 0);
                            width: 15%; height: 120px;
                            background-color: rgb(40, 243, 50);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            <a href="/room" style="color: white">107</a>

                    </div>
                @else
                    <div style="border: solid 1px rgb(0, 0, 0);
                            width: 15%; height: 120px;
                            background-color: rgb(248, 248, 250);
                            font-size: 50px;
                            text-align: center;
                            justify-content:
                            center;align-items:
                            center; text-align: center;
                            display: inline-block;">
                            107
                    </div>
                @endif



            </div>
            <div id="container">
                <div id="header">
                </div>

            </div>
        </div>
    </div>
</div>



@endsection

