@extends('admin.layouts.index')
@section('title', '业务员管理')
@section('content')

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
@endsection