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
<form class="form-horizontal" role="form" method="post" action="{{url('kehu/store')}}" >
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户姓名:</label>
		<div class="col-sm-10">
			<input type="text" name="k_name" class="form-control" placeholder="请输入姓名"><span id="checkname"></span>
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户级别:</label>
		<div class="col-sm-10">
			<input type="radio" name="k_level"  value="1">铂金
			<input type="radio" name="k_level" value="2">黄金
			<input type="radio" name="k_level" value="3">玫瑰金
			<input type="radio" name="k_level" value="4">至尊黑卡
		</div>
	</div>
	
    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户从事行业：</label>
		<div class="col-sm-10">
			<select name="k_hang" class="form-control" >
                <option value="">--请选择--</option>
                <option value="1">餐饮</option>
                <option value="2">建筑</option>
                <option value="3">石油</option>
                <option value="4">矿石</option>
                <option value="5">电子</option>
            </select>
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户来源:</label>
		<div class="col-sm-10">
			<input type="radio" name="k_lai"  value="1">介绍
			<input type="radio" name="k_lai" value="2">广告引入
			<input type="radio" name="k_lai" value="3">门店
			<input type="radio" name="k_lai" value="4">其他
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">业务员:</label>
		<div class="col-sm-10">
			<select name="y_id" class="form-control">
                <option value="">--请选择--</option>
                @foreach($res as $v)
                <option value="{{$v->y_id}}">{{$v->y_name}}</option>
                @endforeach
            </select>
		</div>
	</div>
        
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">电话:</label>
		<div class="col-sm-10">
			<input type="text" name="k_tels" class="form-control" placeholder="请输入电话">
		</div>
	</div>

    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">手机:</label>
		<div class="col-sm-10">
			<input type="text" name="k_tel" class="form-control" placeholder="请输入手机号">
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
		//名字
		$("input[name='k_name']").blur(function(){
			var k_name = $(this).val();
			var knreg = /^[\u4e00-\u9fa5]+$/
			if(k_name==''){
				$("#checkname").html("<font color='red'>客户名称不能为空</font>");
				return false;
			}else if(!knreg.test(k_name)){
				$("#checkname").html("<font color='red'>客户名称必须是中文</font>");
				return false;
			}
				
		})
		//
	})
</script>