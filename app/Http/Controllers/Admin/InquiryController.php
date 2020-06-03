<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;
use App\Kehu;
use App\Meeting;
class InquiryController extends Controller
{
    // 展示
    public function index(){
        $admin=session('admin');
        if($admin->a_level!=2){
            // return redirect('login');
            dd('权限不够');
        }
        // 搜索
        // 接收搜索条件
        $name=request()->name;
        $url=request()->url;
        $ye_name=request()->ye_name;
        $level=request()->level;
        $hang=request()->hang;
        $lai=request()->lai;
        // 拼接搜索条件
        $where=[];
        if($name){
            $where[]=['k_name','like',"%$name%"];
        }
        if($level){
            $where[]=['k_level','=',$level];
        }
        if($hang){
            $where[]=['k_hang','=',$hang];
        }
        if($lai){
            $where[]=['k_lai','=',$lai];
        }
        if($url){
            $where[]=['k_url','like',"%$url%"];
        }
        if($ye_name){
            $where[]=['y_name','like',"%$ye_name%"];
        }
        // 查询客户信息表和客户拜访信息
        $data=Meeting::leftjoin('yewu','meeting.y_id','=','yewu.y_id')->leftjoin('kehu','meeting.k_id','=','kehu.k_id')->where($where)->paginate(3);
        return view('admin.inquiry.index',['data'=>$data,'name'=>$name,'url'=>$url,'ye_name'=>$ye_name,'level'=>$level,'hang'=>$hang,'lai'=>$lai]);
    }
}
