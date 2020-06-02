@extends('admin.layouts.index')
@section('title', '综合查询')
@section('content') 
<center>
<table class="table">
	<center><h2>综合查询</h2></center>
    <form>
        客户名称：<input type="text" name="name" placeholder="请输入客户名称关键字" value="{{$name}}">
        业务员名称：<input type="text" name="ye_name" placeholder="请输入业务员名称关键字">
        访问地址：<input type="text" name="url" placeholder="请输入访问地址关键字">
        <input type="submit" value="搜索">
    </form>
   <thead>
      <tr>
         <th>客户名称</th>
         <th>客户级别</th>
         <th>客户从事行业</th>
         <th>客户电话</th>
         <th>客户来源 </th>
         <th>所属业务员</th>
         <th>业务员电话</th>
         <th>业务员办公电话</th>
         <th>拜访时间</th>
         <th>访问人</th>
         <th>访问地址</th>
         <th>访问详情</th>
         <th>下次访问时间</th>
      </tr>
   </thead>
   @foreach($data as $v)
   <tbody>
      <tr>
         <td>{{$v->k_name}}</td>
         <td>{{$v->k_level==1?'普通':'高级'}}</td>
         <td>{{$v->k_hang}}</td>
         <td>{{$v->k_tel}}</td>
         <td>{{$v->k_lai==1?'介绍':'广告'}}</td>
         <td>{{$v->y_name}}</td>
         <td>{{$v->y_tel}}</td>
         <td>{{$v->y_tels}}</td>
         <td>{{$v->m_time}}</td>
         <td>{{$v->m_man}}</td>
         <td>{{$v->m_url}}</td>
         <td>{{$v->m_desc}}</td>
         <td>{{$v->m_ntime}}</td>
      </tr>
   </tbody>
   @endforeach
   <tr>
        <td colspan="2">{{$data->appends(['name'=>$name,'url'=>$url,'ye_name'=>$ye_name])->links()}}</td>
   </tr>
</table>
</center>
@endsection