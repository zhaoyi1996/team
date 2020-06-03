    @foreach($res as $v)
		<tr>
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
		<tr>
         <td colspan="5" align="center">{{$res->links()}}</td>
      </tr> 