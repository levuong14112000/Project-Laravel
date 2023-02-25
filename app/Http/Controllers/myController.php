<?php

namespace App\Http\Controllers;
use App\Models\courses;
use App\Models\subject;
use App\Models\users;
use App\Models\usersroloes;
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
        $courses = courses::all();
        $subject = subject::all();
        $users = users::all();
        $usersroloes = usersroloes::all();
        return view('detailkhoahoc1')->with('courses',$courses )->with('subject',$subject)
            ->with('users',$users )->with('usersroloes',$usersroloes);
    }
    public function detail2(){
        $courses = courses::all();
        $subject = subject::all();
        $users = users::all();
        $usersroloes = usersroloes::all();
        return view('detailkhoahoc1')->with('courses',$courses )->with('subject',$subject)
            ->with('users',$users )->with('usersroloes',$usersroloes);
    }
    public function detail3(){
        $courses = courses::all();
        $subject = subject::all();
        $users = users::all();
        $usersroloes = usersroloes::all();
        return view('detailkhoahoc1')->with('courses',$courses )->with('subject',$subject)
            ->with('users',$users )->with('usersroloes',$usersroloes);
    }

}
