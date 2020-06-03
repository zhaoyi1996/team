@extends('admin.layouts.index')
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

<table class="table table-bordered">
	<center><h3>客户访问</h3></center>
	<thead>
		<tr>
			<th>id</th>
			<th>业务员</th>
			<th>客户</th>
			<th>访问人</th>
			<th>访问址</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
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
	</tbody>
</table>
</body>
</html>
<script src="/static/jquery.min.js"></script>
<script>
    $(function(){
        $('.destory').click(function(){
            if(window.confirm('你确定要删除？')){
                var m_id = $(this).attr("m_id");
                $.get(
                    '/meeting/destroy/'+m_id,
                    function(res){
                        if(res!=0){
                            location.href='meeting';
                            alert(res);
                        }else{
                            location.href='meeting';
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