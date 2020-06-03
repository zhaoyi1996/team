@extends('admin.layouts.index')
@section('title', '客户拜访')
@section('content') 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>团队开发</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<center><h2>客户拜访</h2></center>
<form class="form-horizontal" role="form" method="post" action="{{url('/meeting/store')}}" >
@csrf
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名字:</label>
		<div class="col-sm-10">
			<select name="y_id" class="form-control" >
                <option value="">--请选择--</option>
                @foreach($yewu as $v)
                <option value="{{$v->y_id}}">{{$v->y_name}}</option>
                @endforeach
            </select>
		</div>
	</div>

	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户名字:</label>
		<div class="col-sm-10">
			<select name="k_id" class="form-control" >
                <option value="">--请选择--</option>
            </select>
		</div>
	</div>
	
    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问人:</label>
		<div class="col-sm-10">
			<input type="text" name="m_man" class="form-control"  placeholder="请填写" >
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问地址</label>
		<div class="col-sm-10">
			<input type="text" name="m_url" class="form-control"  placeholder="请填写" >
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问详情：</label>
		<div class="col-sm-10">
			<textarea name="m_desc"class="form-control" id="" cols="30" rows="10"></textarea>
		</div>
	</div>
        
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">添加</button>
		</div>
	</div>
</form>

</body>
</html>
@endsection
<script src="/static/jquery.min.js/"></script>
<script>
    $(function(){
        $(document).on('change','select[name="y_id"]',function(){
            var id = $(this).val();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            $.ajax({
                url:"{{url('/meeting/addyewu')}}",
                type:'post',
                data:{id:id},
                success:function(res){
                    $("select[name='k_id']").html(res);
                }
            })
        })

        
    })
</script>