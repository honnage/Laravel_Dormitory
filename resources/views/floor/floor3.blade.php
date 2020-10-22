
@extends('layouts.app')

@section('content')
@foreach($customers as $customer)
@endforeach

<style type="text/css">
</style>
<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
        <h1>เพื่มข้อมูลห้อง</h1>
        <a href="/floor1" class="btn btn-outline-light" style="background-color: dimgray">ชั้น 1</a>
        <a href="/floor2" class="btn btn-outline-light" style="background-color: indianred">ชั้น 2</a>
        <a href="/floor3" class="btn btn-outline-light" style="background-color: coral">ชั้น 3</a>
        <a href="/floor4" class="btn btn-outline-light" style="background-color: cadetblue">ชั้น 4</a>
        <a href="/floor5" class="btn btn-outline-light" style="background-color: dodgerblue">ชั้น 5</a>
        <a href="/floor6" class="btn btn-outline-light" style="background-color: darkorchid">ชั้น 6</a>
        <a href="/room/create" class="col-sm-2  btn btn-outline-success" style="position:absolute ; right:0 "> ห้องทั้งหมด</a>

  </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                @if($customer->room_id == 101 &&  $customer->booking_statusResidence == "1")
                    <a href="/room" class="box box-enable">
                        101
                    </a>
                @else
                    <a href="/room" class="box box-enable">
                        101
                    </a>
                @endif

                @if($customer->room_id == 102 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        102
                    </div>
                @else
                    <div class="box box-disable">
                        102
                    </div>
                @endif

                @if($customer->room_id == 103 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        103
                    </div>
                @else
                    <div class="box box-disable">
                        103
                    </div>
                @endif

                @if($customer->room_id == 104 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        104
                    </div>
                @else
                    <div class="box box-disable">
                        104
                    </div>
                @endif

                @if($customer->room_id == 105 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        105
                    </div>
                @else
                    <div class="box box-disable">
                        105
                    </div>
                @endif

                @if($customer->room_id == 106 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        106
                    </div>
                @else
                    <div class="box box-disable">
                        106
                    </div>
                @endif

                <br><br> <br><br>

                @if($customer->room_id == 111 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        111
                    </div>
                @else
                    <div class="box box-disable">
                        111
                    </div>
                @endif

                @if($customer->room_id == 110 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        110
                    </div>
                @else
                    <div class="box box-disable">
                        110
                    </div>
                @endif

                <div class="unbox">
                     &nbsp;
                </div>

                @if($customer->room_id == 109 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        109
                    </div>
                @else
                    <div class="box box-disable">
                        109
                    </div>
                @endif


                @if($customer->room_id == 108 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        108
                    </div>
                @else
                    <div class="box box-disable">
                        108
                    </div>
                @endif


                @if($customer->room_id == 107 &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                        107
                    </div>
                @else
                    <div class="box box-disable">
                        107
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>



@endsection

