
@extends('layouts.app')

@section('content')
@foreach($rooms as $room)
@endforeach

<style type="text/css">
</style>
<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>ข้อมูลห้องชั้น {{$room->rooms_floor}}</h1><br>
    <a href="/floor/{{1}}" class="btn btn-outline-light" style="background-color: dimgray">ชั้น 1</a>
    <a href="/floor/{{2}}" class="btn btn-outline-light" style="background-color: indianred">ชั้น 2</a>
    <a href="/floor/{{3}}" class="btn btn-outline-light" style="background-color: coral">ชั้น 3</a>
    <a href="/floor/{{4}}" class="btn btn-outline-light" style="background-color: cadetblue">ชั้น 4</a>
    <a href="/floor/{{5}}" class="btn btn-outline-light" style="background-color: dodgerblue">ชั้น 5</a>
    <a href="/floor/{{6}}" class="btn btn-outline-light" style="background-color: darkorchid">ชั้น 6</a>
    <a href="/room/create" class="col-sm-2  btn btn-outline-success" style="position:absolute ; right:0 "> ห้องทั้งหมด</a>

  </div>

    <div class="container my-4">

        <div class="row justify-content-center">
            <div class="col-md-12 my-2">

                {{-- loop แถวบนห้อง 101 - 106 --}}
                @for($i = 0 ; $i < 6 ; $i++)
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
                    {{-- {{ $checkVisit ? "อยู่" : "ไม่อยู่" }} --}}

                    @if($i == 9)
                        <div class="unbox">&nbsp;</div>
                    @endif

                    {{-- @if($customer->room_id == $room->rooms_code  &&  $customer->booking_statusResidence == "1") --}}

                    @if($checkVisit)
                        <div class="box box-enable">
                            <a class="a" href="/floor/room/{{$customer->id}}:{{$customer->room_id}}">
                                {{$room->rooms_code}}
                            </a>
                        </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                @endfor
                <br><br><br><br>


                {{-- loop แถวล่างห้อง 107 - 111  --}}
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
                    {{-- {{ $checkVisit ? "อยู่" : "ไม่อยู่" }} --}}

                    {{-- @if($customer->room_id == $room->rooms_code  &&  $customer->booking_statusResidence == "1") --}}

                    @if($checkVisit)
                    <div class="box box-enable">
                        <a class="a" href="/floor/room/{{$customer->id}}:{{$customer->room_id}}">
                            {{$room->rooms_code}}
                        </a>
                    </div>
                    @else
                        <div class="box box-disable">
                            {{$room->rooms_code}}
                        </div>
                    @endif
                    @if($i == 9)
                        <div class="unbox">&nbsp;</div>
                    @endif
                @endfor

                <br><br><br><br><br><br>


            </div>
        </div>

    </div>
</div>



@endsection

