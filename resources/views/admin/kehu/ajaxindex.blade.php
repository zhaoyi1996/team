@foreach($res as $k=>$v)
		<tr  class="{{($k%2)!=1?'danger':'success'}}">
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