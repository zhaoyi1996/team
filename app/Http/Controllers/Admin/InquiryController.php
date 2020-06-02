<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;
use App\Kehu;
use App\Meeting;
class InquiryController extends Controller
{
    // 展示
    public function index(){
        // 搜索
        // 接收搜索条件
        $name=request()->name;
        $url=request()->url;
        $ye_name=request()->ye_name;
        // 拼接搜索条件
        $where=[];
        if($name){
            $where[]=['k_name','like',"%$name%"];
        }
        if($url){
            $where[]=['k_url','like',"%$url%"];
        }
        if($ye_name){
            $where[]=['y_name','like',"%$ye_name%"];
        }
        // 查询客户信息表和客户拜访信息
        $data=Meeting::leftjoin('yewu','meeting.y_id','=','yewu.y_id')->leftjoin('kehu','meeting.k_id','=','kehu.k_id')->where($where)->paginate(3);
        return view('admin.inquiry.index',['data'=>$data,'name'=>$name,'url'=>$url,'ye_name'=>$ye_name]);
    }
}
