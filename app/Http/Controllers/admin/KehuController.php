<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;
use App\Kehu;
class KehuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $res = Kehu::join('yewu','yewu.y_id','=','kehu.y_id')->paginate(4);
        return view('admin.kehu.index',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $res = Yewu::all();
        return view('admin.kehu.create',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->except('_token');
        $res = Kehu::insert($post);
        if($res){
            return redirect('kehu/');
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
    {   $res = Yewu::all();
        $kehu = Kehu::where('k_id',$id)->first();
        return view('admin.kehu.edit',['res'=>$res,'kehu'=>$kehu]);
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
        $post = $request->except('_token');
        $res =  Kehu::where('k_id',$id)->update($post);
        if($res!==false){
            return redirect('/kehu');
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
        $res = Kehu::where('k_id',$id)->delete();
        if($res){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
}
