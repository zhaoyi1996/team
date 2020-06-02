<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
class SystemController extends Controller
{
    // 系统管理展示
    public function system(){
        $data=Admin::get();
        
    }
}
