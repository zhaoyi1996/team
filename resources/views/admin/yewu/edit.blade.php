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
<center><h2>团队开发</h2></center>
<form class="form-horizontal" role="form" method="post" action="{{url('yewu/update/'.$yewu->y_id)}}" >
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">名字:</label>
		<div class="col-sm-10">
			<input type="text" name="y_name" class="form-control" value="{{$yewu->y_name}}">
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">性别:</label>
		<div class="col-sm-10">
       
            <input type="radio" name="y_sex" {{$yewu->y_sex==1 ? 'checked':''}} value="1">男
			<input type="radio" name="y_sex" {{$yewu->y_sex==2 ? 'checked':''}} value="2">女
			
		</div>
	</div>
	
    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">办公电话:</label>
		<div class="col-sm-10">
			<input type="text" name="y_tels" class="form-control" value="{{$yewu->y_tels}}" >
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">电话:</label>
		<div class="col-sm-10">
			<input type="text" name="y_tel" class="form-control" value="{{$yewu->y_tel}}" >
		</div>
	</div>
        
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning"">修改</button>
		</div>
	</div>
</form>

</body>
</html>
@endsection