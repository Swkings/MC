<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller; //需要导入命名空间，否则不能继承Controller

class GoodsController extends Controller
{
    //index 方法
    public function index()
    {
        echo "Goods控制器";
    }

}

