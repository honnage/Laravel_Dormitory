@extends('layouts.app')

@section('content')
@foreach($dormitorys as $dormitory)
@endforeach
<div class="container">
  <br>
    <div id="p1" class="form-group col-xs-12 col-sm-12 col-md-12 ">
    <h1>ข้อมูลหอพัก
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
                <form action="{{ route('dormitory.update',$dormitory->id) }}" method="post" id="data" >
                    <div class="card-header">
                        กำหนดหน่วยให้บิรการ
                    </div>
                    {{csrf_field()}}
                    @method('PUT')

                    <div class="form-inline">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-1"></label>
                            <label class="col-sm-2">หน่วยน้ำ</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_unitsWater" id="dormitory_unitsWater" style="color: blue; font-size: 20px" value="{{ $dormitory->dormitory_unitsWater }}">

                            <label class="col-sm-2">หน่วยบริการน้ำ</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_serviceWater" id="dormitory_serviceWater" style="color: blue; font-size: 20px" value="{{ $dormitory->dormitory_serviceWater }}">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                            <label class="col-sm-1"></label>
                            <label class="col-sm-2">หน่วยไฟฟ้า</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_unitselEctricity" id="dormitory_unitselEctricity" style="color: blue; font-size: 20px" value="{{ $dormitory->dormitory_unitselEctricity }}">

                            <label class="col-sm-2">หน่วยบริการไฟฟ้า</label>
                            <input type="text" class="form-control col-sm-3" name="dormitory_serviceElectricity" id="dormitory_serviceElectricity" style="color: blue; font-size: 20px" value="{{ $dormitory->dormitory_serviceElectricity }}">

                        </div>

                    </div>
                    <br><br>
                    <center>
                    <button type="reset" class="btn btn-secondary col-sm-2">ยกเลิก</button>
                    {{-- <button type="submit"  value="submit" name="submit" class="btn btn-success col-sm-2">บันทึก</button> --}}
                    <button type="submit" value="submit"  class="btn btn-success save col-sm-2">อัพเดท</button>
                    </center>
                </form>
                </div>
                <a href="/dormitory" class="col-sm-2 my-3 btn btn-primary"> ย้อนกลับ</a>
            </div>
        </div>
    </div>
</div>

@endsection


