<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function main(){
        return view('main');
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
