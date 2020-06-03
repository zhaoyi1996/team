<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;
use App\Kehu;
use App\Meeting;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $res = Meeting::leftjoin('yewu','Yewu.y_id','=','Meeting.y_id')
        ->leftjoin('kehu','kehu.k_id','=','meeting.k_id')
        ->paginate(4);
        if(request()->ajax()){
            return view('admin.kehu.ajaxindex',['res'=>$res]);
        }
        return view('admin.meeting.index',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $yewu = Yewu::all();
        $kehu = Kehu::all();
        return view('admin.meeting.create',['yewu'=>$yewu,'kehu'=>$kehu]);
    }

    public function addyewu(Request $request){
        $id = request()->id;
        $city = Kehu::where('y_id',$id)->get();
        $option = '<option value="0">--请选择--</option>';
        foreach($city as $k=>$v){
            $option.="<option value='".$v->k_id."'>".$v->k_name."</option>";
        }
        return $option;
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
        $res = Meeting::insert($post);
        if($res){
            return redirect('meeting/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Meeting::where('m_id',$id)->delete();
        if($res){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
}
