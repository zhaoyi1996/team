@extends('admin.layouts.index')
@section('title', '系统管理')
@section('content')
<center>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>管理员id</th>
				<th>管理员名称</th>
				<th>管理员级别</th>
                @if($admin->a_level==2)
                <th>操作</th>
                @endif
			</tr>
		</thead>
		<tbody>
            @foreach($data as $k=>$v)
			<tr class="{{($k%2)!=1?'danger':'success'}}">
				<td>{{$v->a_id}}</td>
				<td>{{$v->a_name}}</td>
				<td>@if($v->a_level==1)业务员@elseif($v->a_level==2)主管@else 系统管理员@endif</td>
                @if($admin->a_level==2)
                <td>
                    <a href="javascript:;">删除</a>
                </td>
                @endif
			</tr>
            @endforeach
		</tbody>
</table>

</div>  	
</center>
@endsection