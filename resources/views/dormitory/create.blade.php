@extends('layouts.app')

@section('content')

<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>ข้อมูลหอพัก
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
                <form action="/dormitory" method="post" id="data" >
                    <div class="card-header">
                        กำหนดหน่วยให้บิรการ
                    </div>
                    {{csrf_field()}}
                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-1"></label>
                            <label class="col-sm-2">หน่วยน้ำ</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_unitsWater" id="dormitory_unitsWater" placeholder="เช่น: 20">

                            <label class="col-sm-2">หน่วยบริการน้ำ</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_serviceWater" id="dormitory_serviceWater" placeholder="เช่น: 5">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-1"></label>
                            <label class="col-sm-2">หน่วยไฟฟ้า</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_unitselEctricity" id="dormitory_unitselEctricity" placeholder="เช่น: 4.50">

                            <label class="col-sm-2">หน่วยบริการไฟฟ้า</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_serviceElectricity" id="dormitory_serviceElectricity" placeholder="เช่น: 1.50">

                        </div>

                    </div>
                    <br><br>
                    <center>
                    <button type="reset" class="btn btn-secondary col-sm-2">ยกเลิก</button>
                    {{-- <button type="submit"  value="submit" name="submit" class="btn btn-success col-sm-2">บันทึก</button> --}}
                    <button type="submit" value="submit"  class="btn btn-success save col-sm-2">บันทึก</button>\
                    </center>
                </form>
                </div>
                <a href="/room" class="col-sm-2 my-3 btn btn-primary"> ย้อนกลับ</a>
            </div>
        </div>
    </div>
</div>

@endsection


