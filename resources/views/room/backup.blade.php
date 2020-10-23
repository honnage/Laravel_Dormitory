
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
                {{-- <?php $i = 0 ?> --}}
                @for($i = 0 ; $i < 6 ; $i++)
                    <?php $room = $rooms[$i] ?>
                    @if($room->rooms_code == "110")
                        <div class="box box-disable">&nbsp;</div>
                    @endif
                    @if($customer->room_id == $room->rooms_code &&  $customer->booking_statusResidence == "1")
                        <div class="box box-enable">
                            <a href="{{ route('booking.create') }}">
                                {{$room->rooms_code}}
                            </a>
                        </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                    {{-- {{$i++}} --}}
                @endfor

                @for($i = 10 ; $i >= 6 ; $i--)
                    <?php $room = $rooms[$i] ?>
                    @if($customer->room_id == $room->rooms_code &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                            {{$room->rooms_code}}
                    </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                    @if($room->rooms_code == "110")
                        <div class="box box-disable">&nbsp;</div>
                    @endif
                    {{-- {{$i++}} --}}
                @endfor

                <br><br> <br><br> <br><br>

                @for($i = 11 ; $i <  17; $i++)
                    <?php $room = $rooms[$i] ?>
                    @if($room->rooms_code == "110")
                        <div class="box box-disable">&nbsp;</div>
                    @endif
                    @if($customer->room_id == $room->rooms_code &&  $customer->booking_statusResidence == "1")
                        <div class="box box-enable">
                                {{$room->rooms_code}}
                        </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                    {{-- {{$i++}} --}}
                @endfor

                @for($i = 21 ; $i >= 17 ; $i--)
                    <?php $room = $rooms[$i] ?>
                    @if($customer->room_id == $room->rooms_code &&  $customer->booking_statusResidence == "1")
                    <div class="box box-enable">
                            {{$room->rooms_code}}
                    </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                    @if($room->rooms_code == "210")
                        <div class="box box-disable">&nbsp;</div>
                    @endif
                    {{-- {{$i++}} --}}
                @endfor
        </div>
    </div>
</div>



@endsection


@for($i = 10 ; $i >= 6 ; $i--)
<?php
    $room = $rooms[$i];
    $checkVisit = false;
?>
@foreach($customers as $customer)
<?php
        if($customer->room_id == $room->rooms_code  &&  $customer->booking_statusResidence == "1"){
            $checkVisit = true ;
            break;
        }
?>
@endforeach
{{ $checkVisit ? "อยู่" : "ไม่อยู่" }}
@if($checkVisit)
<div class="box box-enable">
        {{$room->rooms_code}}
</div>
@else
    <div class="box box-disable">
        {{$room->rooms_code}}
    </div>
@endif
@if($i == 9)
    <div class="box box-disable">&nbsp;</div>
@endif
@endfor
