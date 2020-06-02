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
<form class="form-horizontal" role="form" method="post" action="{{url('kehu/update/'.$kehu->k_id)}}" >
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户姓名:</label>
		<div class="col-sm-10">
			<input type="text" name="k_name" class="form-control" value="{{$kehu->k_name}}">
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户级别:</label>
		<div class="col-sm-10">
			<input type="radio" name="k_level" {{$kehu->k_level==1? 'checked' : ''}} value="1">铂金
			<input type="radio" name="k_level" {{$kehu->k_level==2? 'checked' : ''}} value="2">黄金
			<input type="radio" name="k_level" {{$kehu->k_level==3? 'checked' : ''}} value="3">玫瑰金
			<input type="radio" name="k_level" {{$kehu->k_level==4? 'checked' : ''}} value="4">至尊黑卡
		</div>
	</div>
	
    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户从事行业：</label>
		<div class="col-sm-10">
			<select name="k_hang" class="form-control" >
                <option value="">--请选择--</option>
                <option {{$kehu->k_hang==1? 'selected' : ''}} value="1">餐饮</option>
                <option {{$kehu->k_hang==2? 'selected' : ''}} value="2">建筑</option>
                <option {{$kehu->k_hang==3? 'selected' : ''}} value="3">石油</option>
                <option {{$kehu->k_hang==4? 'selected' : ''}} value="4">矿石</option>
                <option {{$kehu->k_hang==5? 'selected' : ''}} value="5">电子</option>
            </select>
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户来源:</label>
		<div class="col-sm-10">
			<input type="radio" name="k_lai" {{$kehu->k_lai==1? 'checked' : ''}}  value="1">介绍
			<input type="radio" name="k_lai" {{$kehu->k_lai==2? 'checked' : ''}} value="2">广告引入
			<input type="radio" name="k_lai" {{$kehu->k_lai==3? 'checked' : ''}} value="3">门店
			<input type="radio" name="k_lai" {{$kehu->k_lai==4? 'checked' : ''}} value="4">其他
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">业务员:</label>
		<div class="col-sm-10">
			<select name="y_id" class="form-control">
                <option value="">--请选择--</option>
                @foreach($res as $v)
                <option value="{{$v->y_id}}" {{$kehu->y_id==$v->y_id? 'selected' : ''}} >{{$v->y_name}}</option>
                @endforeach
            </select>
		</div>
	</div>
        
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">电话:</label>
		<div class="col-sm-10">
			<input type="text" name="k_tels" class="form-control" value="{{$kehu->k_tels}}">
		</div>
	</div>

    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">手机:</label>
		<div class="col-sm-10">
			<input type="text" name="k_tel" class="form-control" value="{{$kehu->k_tel}}">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  class="btn btn-warning">编辑</button>
		</div>
	</div>
</form>

</body>
</html>