@extends('admin.layouts.index')
@section('title', '业务员管理')
@section('content')
<table class="table table-bordered">
	<center><h3>业务员列表</h3></center>
	<thead>
		<tr>
			<th>id</th>
			<th>名称</th>
			<th>性别</th>
			<th>办公电话</th>
			<th>办公电话</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
        @foreach($res as $k=>$v)
		<tr  class="{{($k%2)!=1?'danger':'success'}}">
			<td>{{$v->y_id}}</td>
			<td>{{$v->y_name}}</td>
			<td>@if($v->y_sex==1)男@else女@endif</td>
			<td>{{$v->y_tels}}</td>
			<td>{{$v->y_tel}}</td>
			<td>
			<a href="{{url('/yewu/create')}}" class="btn btn-primary">添加</a>
            <button y_id="{{$v->y_id}}" class="btn destory btn-danger">删除</button>
            <a href="{{url('/yewu/edit/'.$v->y_id)}}" class="btn btn-warning">修改</a>
            </td>
		</tr>
        @endforeach
	</tbody>
</table>
	<center>{{$res->links()}}</center>

<script src="/static/jquery.min.js"></script>
<script>
    $(function(){
        $('.destory').click(function(){
            if(window.confirm('你确定要删除？')){
                var y_id = $(this).attr("y_id");
                $.get(
                    '/yewu/destroy/'+y_id,
                    function(res){
                    	alert(res);
                    }
                )
            } 
        })
    })
</script>
@endsection