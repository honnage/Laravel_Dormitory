
@extends('layouts.app')

@section('content')



<style type="text/css">
</style>
<div class="container">
  <br>
  <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>เพื่มข้อมูลห้อง</h1>
    <a href="/floor/{{1}}" class="btn btn-outline-light" style="background-color: dimgray">ชั้น 1</a>
    <a href="/floor/{{2}}" class="btn btn-outline-light" style="background-color: indianred">ชั้น 2</a>
    <a href="/floor/{{3}}" class="btn btn-outline-light" style="background-color: coral">ชั้น 3</a>
    <a href="/floor/{{4}}" class="btn btn-outline-light" style="background-color: cadetblue">ชั้น 4</a>
    <a href="/floor/{{5}}" class="btn btn-outline-light" style="background-color: dodgerblue">ชั้น 5</a>
    <a href="/floor/{{6}}" class="btn btn-outline-light" style="background-color: darkorchid">ชั้น 6</a>
    <a href="/room/create" class="col-sm-2  btn btn-outline-success" style="position:absolute ; right:0 "> ห้องทั้งหมด</a>
  </div>

    <div class="container">

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

                    {{-- @if($customer->room_id == $room->rooms_code  &&  $customer->booking_statusResidence == "1") --}}

                    @if($checkVisit)
                        <div class="box box-enable">
                            {{--<a class="a" href="/floor/room/{{$customer->id}}:{{$customer->room_id}}"> --}}
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

                <br><br><br>
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br><br>

                {{-- loop แถวบนห้อง 201 - 206 --}}
                @for($i = 11 ; $i <  17; $i++)
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
                @endfor

                <br><br>
                <br><br>

                {{-- loop แถวล่างห้อง 207 - 211  --}}
                @for($i = 21 ; $i >= 17 ; $i--)
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
                @if($i == 20)
                    <div class="unbox">&nbsp;</div>
                @endif
                @endfor

                <br><br><br>
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br><br>

                {{-- loop แถวบนห้อง 301 - 306 --}}
                @for($i = 22 ; $i <  28; $i++)
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

                <br><br>
                <br><br>

                {{-- loop แถวล่างห้อง 307 - 311  --}}
                @for($i = 32 ; $i >= 28 ; $i--)
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
                @if($i == 31)
                    <div class="unbox">&nbsp;</div>
                @endif
                @endfor

                <br><br><br>
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br><br>

                {{-- loop แถวบนห้อง 401 - 406 --}}
                @for($i = 33 ; $i <  39; $i++)
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

                <br><br>
                <br><br>


                {{-- loop แถวล่างห้อง 407 - 411  --}}
                @for($i = 43 ; $i >= 39 ; $i--)
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
                @if($i == 42)
                    <div class="unbox">&nbsp;</div>
                @endif
                @endfor

                <br><br><br>
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br><br>

                {{-- loop แถวบนห้อง 501 - 506 --}}
                @for($i = 44 ; $i <  50; $i++)
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

                <br><br>
                <br><br>


                {{-- loop แถวล่างห้อง 507 - 511  --}}
                @for($i = 54 ; $i >= 50 ; $i--)
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
                @if($i == 53)
                    <div class="unbox">&nbsp;</div>
                @endif
                @endfor

                <br><br><br>
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br><br>

                {{-- loop แถวบนห้อง 601 - 606 --}}
                @for($i = 55 ; $i <  61; $i++)
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


                {{-- loop แถวล่างห้อง 607 - 611  --}}
                @for($i = 65 ; $i >= 61 ; $i--)
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
                @if($i == 64)
                    <div class="unbox">&nbsp;</div>
                @endif
                @endfor

                <br><br><br><br><br><br>

            </div>
        </div>

    </div>
</div>



@endsection

