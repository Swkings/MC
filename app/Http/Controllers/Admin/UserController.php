<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller; //需要导入命名空间，否则不能继承Controller

class UserController extends Controller
{
    //index 方法
    public function index()
    {
//        DB::insert('insert into mc_user(name,password) value (?,?)',['test1','123'])
        $id =  Auth::user()->id;
        $data = DB::table('users')->where('id',$id)->first();
        return view('user')->with("data",$data);
    }

    public function project(){
        $id =  Auth::user()->id;
        $data = DB::table('project')->where('id',$id)->get();
        return view('home')->with("data",$data);
    }

}

