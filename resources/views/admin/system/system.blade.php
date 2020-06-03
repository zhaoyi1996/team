@extends('admin.layouts.index')
@section('title', '系统管理')
@section('content')
<center>
<div class="table-responsive">
	<h2>系统管理</h2>
	<table class="table">
		<thead>
			<tr>
				<th>管理员id</th>
				<th>管理员名称</th>
				<th>管理员级别</th>
                <th>操作</th>
			</tr>
		</thead>
		<tbody>
            @foreach($data as $k=>$v)
			<tr class="{{($k%2)!=1?'danger':'success'}}">
				<td>{{$v->a_id}}</td>
				<td>{{$v->a_name}}</td>
				<td>@if($v->a_level==1)业务员@elseif($v->a_level==2)主管@else 系统管理员@endif</td>
                <td>
                    <a class="btn btn-danger del" a_id={{$v->a_id}} href="javascript:;">删除</a>
                </td>
			</tr>
            @endforeach
		</tbody>
</table>

</div>  	
</center>
<script>
	$(function(){
		$(document).on('click','.del',function(){
			// 获取要删除的管理员id
			var id=$(this).attr('a_id');
			if(window.confirm('您确定要删除吗？')){
				$.get("{{url('/system/systemDel')}}"+'/'+id,function(res){
					alert(res.msg);
					// $('.del').attr('a_id',id).parents('tr').hide();
				},'json')
			}
			
		})
	})
</script>
@endsection