<?php
/**
 * Created by PhpStorm.
 * User: Swking
 * Date: 2018/6/25
 * Time: 21:48
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class MarkController extends Controller
{
    public function index(){
        $submitdata = Request::all();
        $id =  Auth::user()->id;
        $type = null;
        $project = null;
        $stime = null;
        $etime = null;
        foreach ($submitdata as $key=>$value){
            if($key != '_token'){
                if($key == 'type'){
                    $type = $value;
                }else if($key == 'project'){
                    $project = $value;
                }else if($key == 'stime'){
                    $stime = $value;
                }else if($key == 'etime'){
                    $etime = $value;
                }
            }
        }
        if($type == 1){
            DB::insert('insert into mc_project (id,project,type,stime,etime,cardnum,marktime) values (?,?,?,?,?,?,?) ',[$id,$project,$type,null,null,0,date("Y-m-d",strtotime("-1 day"))]);
        }else if ($type == 2){
            DB::insert('insert into mc_project (id,project,type,stime,etime,cardnum,marktime) values (?,?,?,?,?,?,?) ',[$id,$project,$type,date("Y-m-d"),date("Y-m-d"),0,date("Y-m-d",strtotime("-1 day"))]);
        }

//        dd($submitdata);

        $response = "创建成功!";
        return redirect('create')->with("response",$response);
    }
}