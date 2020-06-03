@extends('admin.layouts.index')
<<<<<<< HEAD
@section('title', '综合分析')
@section('content') 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>团队开发</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

=======
@section('title', '客户管理')
@section('content')
>>>>>>> master
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
	<tr>
         <td colspan="5" align="center">{{$res->links()}}</td>
      </tr> 
	</tbody>
</table>
</body>
</html>
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
		//无刷新分页
		$(document).on('click','.page-item a',function(){
			var url = $(this).attr('href');
			$.get(url,function(res){
				$('tbody').html(res)
			})
		})
    })
</script>
@endsection