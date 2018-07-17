<?php
/**
 * Created by PhpStorm.
 * User: Swking
 * Date: 2018/6/30
 * Time: 8:52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

}