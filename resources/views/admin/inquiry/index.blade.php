@extends('admin.layouts.index')
@section('title', '综合查询')
@section('content') 
<center>
<table class="table">
	<center><h2>综合查询</h2></center>
    <form>
        客户名称：<input type="text" name="name" placeholder="请输入客户名称关键字" value="{{$name}}">
        客户级别：<select name="level" id="">
           <option value="">--请选择--</option>
           <option value="1"{{$level==1?'selected':''}}>铂金</option>
           <option value="2"{{$level==2?'selected':''}}>黄金</option>
           <option value="3"{{$level==3?'selected':''}}>玫瑰金</option>
           <option value="4"{{$level==4?'selected':''}}>至尊黑卡</option>
        </select>
        客户从事行业：<select name="hang" id="">
           <option value="">--请选择--</option>
           <option value="1"{{$hang==1?'selected':''}}>餐饮</option>
           <option value="2"{{$hang==2?'selected':''}}>建筑</option>
           <option value="3"{{$hang==3?'selected':''}}>石油</option>
           <option value="4"{{$hang==4?'selected':''}}>矿石</option>
           <option value="5"{{$hang==5?'selected':''}}>电子</option>
        </select>
        客户来源：<select name="lai" id="">
           <option value="">--请选择--</option>
           <option value="1"{{$lai==1?'selected':''}}>介绍</option>
           <option value="2"{{$lai==2?'selected':''}}>广告引入</option>
           <option value="3"{{$lai==3?'selected':''}}>门店</option>
           <option value="4"{{$lai==4?'selected':''}}>其他</option>
        </select>
        业务员名称：<input type="text" name="ye_name" placeholder="请输入业务员名称关键字">
        访问地址：<input type="text" name="url" placeholder="请输入访问地址关键字">
        <button type="submit" class="btn btn-primary btn-sm">搜索</button>
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
         <td>@if($v->k_level==1)铂金 @elseif($v->k_level==2)黄金 @elseif($v->k_level==3)玫瑰金 @else 至尊黑卡 @endif</td>
         <td>@if($v->k_hang==1)餐饮@elseif($v->k_hang==2)建筑@elseif($v->k_hang==3)石油@elseif($v->k_hang==4)矿石@elseif($v->k_hang==5)电子@endif</td>
         <td>{{$v->k_tel}}</td>
         <td>@if($v->k_lai==1)介绍 @elseif($v->k_lai==2)广告引入@elseif($v->k_lai==3)门店 @else 其他 @endif</td>
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
        <td colspan="2">{{$data->appends(['name'=>$name,'url'=>$url,'ye_name'=>$ye_name,'lai'=>$lai,'hang'=>$hang,'level'=>$level])->links()}}</td>
   </tr>
</table>
</center>
@endsection