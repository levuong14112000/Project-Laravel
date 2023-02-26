@extends('layout.main')
@section('khoahoc1')
    @foreach($ds as $n)
        @if($n->course_id == 1)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="
            display: flex;
    flex-direction: column;
    align-items: center;" >
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
@section('khoahoc2')
    @foreach($ds as $n)
        @if($n->course_id == 2)
            <div class=" align-items-center col-3 form-group" style="
            display: flex;
    flex-direction: column;
    align-items: center;" >
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->picture)}}" alt=""></div>
                <div class="text-center">{{$n->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc2">Detail</a>
                </div>
            </div>
        @endif
    @endforeach
            @endsection
@section('khoahoc3')
    @foreach($ds as $n)
        @if($n->course_id == 3)
            <div class="d-flex flex-column align-items-center col-3 form-group" style="display: flex;
    flex-direction: column;
    align-items: center;" >
                <div class="hand"><img class="img-thumbnail" src="{{asset('uploads/images/'.$n->picture)}}" alt=""></div>
                <div class="text-center">{{$n->course_name}}</div>
                <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
                <div>
                    <a class="btn btn-primary" href="http://127.0.0.1:8000/khoahoc3">Detail</a>
                </div>
            </div>
        @endif
    @endforeach
@endsection
    @section('hocsinh')
        @foreach($ds1 as $n)
            @if($n->role_id == 2)
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                 <div class="faculty-div">
                    <img src="{{asset('img/faculty/3.jpg')}}" class="img-rounded" />
                    <h3 >{{$n->full_name}}</h3>
                    <hr />
                    <h4>{{$n->address}} <br />
                        {{$n->course_name}}</h4>
                    <p >
                        {{$n->decription}}
                    </p>
                    </div>
                </div>
            @endif
        @endforeach
    @endsection
