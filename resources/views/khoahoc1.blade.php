@extends('main')
@section("khoahoc1")
    <p>Thời Trang</p>
@endsection
    <div>Thời Trang</div>
    @foreach($ds1 as $n)
        @if($n->makhoa == 1)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="float: right">
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->hinh)}}" alt=""></div>
                <div class="text-center">{{$n->tensp}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->donggia)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc1">Detail</a>
                </div>
                <div>hello</div>
            </div>

