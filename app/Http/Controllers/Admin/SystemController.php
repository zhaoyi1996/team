<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
class SystemController extends Controller
{
    // 系统管理展示
    public function system(){
        $admin=session('admin');
        if($admin->a_level!=3){
            dump('权限不够');
            return redirect('/login');
        }
        $data=Admin::get();
        // dd($data);
        return view('admin.system.system',['admin'=>$admin,'data'=>$data]);
    }
    // 删除
    public function systemDel($id){
        $res=Admin::where('a_id',$id)->delete();
        if($res){
            return json_encode(['code'=>00000,'msg'=>'删除成功']);
        }else{
            return json_encode(['code'=>00001,'msg'=>'删除失败']);
        }
    }
}
