<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;

class YewuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $res = Yewu::paginate(4);
        if(request()->ajax()){
            return view('admin.kehu.ajaxindex',['res'=>$res]);
        }

    
        $admin=session('admin');
        if($admin->a_level==1){
            // return redirect('login');
            dd('权限不够');
        }
        $res = Yewu::paginate(4);
        return view('admin.yewu.index',['res'=>$res]);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=session('admin');
        if($admin->a_level==1){
            // return redirect('login');
            dd('权限不够');
        }
        return view('admin.yewu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=session('admin');
        if($admin->a_level==1){
            // return redirect('login');
            dd('权限不够');
        }
        $post = $request->except("_token");
        $res = Yewu::create($post);
        if($res){
            return redirect('yewu/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $admin=session('admin');
        if($admin->a_level==1){
            // return redirect('login');
            dd('权限不够');
        }
        $yewu = Yewu::where('y_id',$id)->first();
        return view('admin.yewu.edit',['yewu'=>$yewu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin=session('admin');
        if($admin->a_level==1){
            // return redirect('login');
            dd('权限不够');
        }
        $post = $request->except("_token");
        $res = Yewu::where('y_id',$id)->update($post);
        if($res!==false){
            return redirect('yewu');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=session('admin');
        if($admin->a_level!=3){
            // return redirect('login');
            dd('权限不够');
        }
        $res = Yewu::where('y_id',$id)->delete();
        if($res){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
}
