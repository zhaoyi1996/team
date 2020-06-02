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
        @foreach($res as $v)
		<tr>
			<td>{{$v->y_id}}</td>
			<td>{{$v->y_name}}</td>
			<td>@if($v->y_sex==1)男@else女@endif</td>
			<td>{{$v->y_tels}}</td>
			<td>{{$v->y_tel}}</td>
			<td>
            <button y_id="{{$v->y_id}}" class="btn destory btn-danger">删除</button>
            <a href="{{url('/yewu/edit/'.$v->y_id)}}" class="btn btn-warning">修改</a>
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
                var y_id = $(this).attr("y_id");
                $.get(
                    '/yewu/destroy/'+y_id,
                    function(res){
                        if(res!=0){
                            location.href='yewu';
                            alert(res);
                        }else{
                            location.href='yewu';
                            alert(res);
                        }
                        
                    }
                )
            }
            
            
        })
    })
</script>