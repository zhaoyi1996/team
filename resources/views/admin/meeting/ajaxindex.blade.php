@foreach($res as $v)
		<tr>
			<td>{{$v->m_id}}</td>
			<td>{{$v->y_name}}</td>
			<td>{{$v->k_name}}</td>
			<td>{{$v->m_man}}</td>
			<td>{{$v->m_url}}</td>
			<td>
			<a href="{{url('/meeting/create')}}" class="btn btn-primary">添加</a>
            <button m_id="{{$v->m_id}}" class="btn destory btn-danger">删除</button>
            </td>
		</tr>
        @endforeach
		<tr>
         <td colspan="5" align="center">{{$res->links()}}</td>
      </tr> 