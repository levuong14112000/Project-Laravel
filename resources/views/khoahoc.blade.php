@extends('layout.main')
@section('khoahoc1')
    @foreach($ds as $n)
        @if($n->course_id == 1)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="float: right">
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->picture)}}" alt=""></div>
                <div class="text-center">{{$n->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc1">Detail</a>
                </div>
            </div>  d
        @endif
    @endforeach
            @endsection
@section('khoahoc2')
    @foreach($ds as $n)
        @if($n->course_id == 2)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="float: right">
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->picture)}}" alt=""></div>
                <div class="text-center">{{$n->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc1">Detail</a>
                </div>
            </div>
        @endif
    @endforeach
            @endsection
@section('khoahoc3')
    @foreach($ds as $n)
        @if($n->course_id == 3)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="float: right">
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->picture)}}" alt=""></div>
                <div class="text-center">{{$n->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc1">Detail</a>
                </div>
            </div>
        @endif
    @endforeach
            @endsection
