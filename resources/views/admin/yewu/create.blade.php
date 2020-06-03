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
<center><h2>业务员管理</h2></center>
=======
@section('title', '业务员管理')
@section('content')

>>>>>>> master
<form class="form-horizontal" role="form" method="post" action="{{url('yewu/store')}}" >
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">名字:</label>
		<div class="col-sm-10">
			<input type="text" name="y_name" class="form-control" placeholder="请输入名字">
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">性别:</label>
		<div class="col-sm-10">
			<input type="radio" name="y_sex"  value="1">男
			<input type="radio" name="y_sex" value="2">女
		</div>
	</div>
	
    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">办公电话:</label>
		<div class="col-sm-10">
			<input type="text" name="y_tels" class="form-control"  placeholder="请填写办公电话" >
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">电话:</label>
		<div class="col-sm-10">
			<input type="text" name="y_tel" class="form-control"  placeholder="请填写电话" >
		</div>
	</div>
        
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">添加</button>
		</div>
	</div>
</form>
<<<<<<< HEAD

</body>
</html>
=======
>>>>>>> master
@endsection