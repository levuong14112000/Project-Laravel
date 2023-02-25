<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function main(){
        return view('layout.main');
    }
    public function khoahoc(){
        $query =DB::table('courses') //Sử dụng class DB
        ->select("course_id","course_name","description","price","picture")
            ->orderBy('course_name','ASC')
            ->get();
        return view('khoahoc')->with('ds',$query);
    }
    public function detail1(){
        return view('detailkhoahoc1');
    }
    public function detail2(){
        return view('detailkhoahoc2');
    }
    public function detail3(){
        return view('detailkhoahoc3');
    }

}
