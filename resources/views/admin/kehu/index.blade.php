@extends('admin.layouts.index')
@section('title', '客户管理')
@section('content')
<table class="table table-bordered">
	<center><h3>客户列表</h3></center>
	<thead>
		<tr>
			<th>客户id</th>
			<th>客户名称</th>
			<th>客户级别</th>
			<th>客户从事行业</th>
			<th>客户来源</th>
			<th>业务员</th>
			<th>电话</th>
			<th>手机</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
    @foreach($res as $v)
		<tr>
			<td>{{$v->k_id}}</td>
			<td>{{$v->k_name}}</td>
			<td>@if($v->k_level==1)铂金@elseif($v->k_level==2)黄金@elseif($v->k_level==3)玫瑰金@else至尊黑卡@endif</td>
			<td>@if($v->k_hang==1)餐饮@elseif($v->k_hang==2)建筑@elseif($v->k_hang==3)石油@elseif($v->k_hang==4)矿石@else电子@endif</td>
			<td>@if($v->k_lai==1)介绍@elseif($v->k_lai==2)广告引入@elseif($v->k_lai==3)门店@else其他@endif</td>
			<td>{{$v->y_name}}</td>
			<td>{{$v->k_tels}}</td>
			<td>{{$v->k_tel}}</td>
			<td>
                <a href="{{url('/kehu/create')}}" class="btn btn-primary">添加</a>
                <button type="button" k_id="{{$v->k_id}}" class="btn destroy btn-danger">删除</button>
                <a href="{{url('/kehu/edit/'.$v->k_id)}}" class="btn btn-warning">编辑</a>
            </td>
		</tr>
    @endforeach 
	</tbody>
</table>
       <center> {{$res->links()}}</center>

<script src="/static/jquery.min.js"></script>
<script>
    $(function(){
        $('.destroy').click(function(){
            if(window.confirm('您确定要删除？')){
                var y_id = $(this).attr("k_id");
                $.get(
                    '/kehu/destroy/'+y_id,
                    function(res){
                        if(res!=0){
                            location.href='kehu';
                            alert(res);
                        }else{
                            location.href='kehu';
                            alert(res);
                        }
                    }
                )
            }
        })
    })
</script>
@endsection