<?php
/**
 * Created by PhpStorm.
 * User: Swking
 * Date: 2018/6/25
 * Time: 19:44
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;

use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index(){
        $data=Request::all();
        $id =  Auth::user()->id;
        //var_dump($data);
        foreach ($data as $key=>$value){
            if($key != '_token'){
                $num = DB::table('project')->where('id',$id)->where('project',$key)->first()->cardnum + 1;
                DB::update('update mc_project set cardnum = ? ,marktime = ? where project = ?',[$num,date("Y-m-d H:i:s"),$key]);
            }
        }
        $return_data = DB::table('project')->where('id',$id)->get();
        return view('home')->with("data",$return_data);
    }
}


