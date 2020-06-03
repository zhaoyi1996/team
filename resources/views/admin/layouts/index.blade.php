<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRM @yield('title')</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/highcharts.js"></script>
</head>
<body>
@section('sidebar') 
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">CRM</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="#">客户管理</a></li>
                <li><a href="/yewu">业务员管理</a></li>
                <li><a href="#">客户拜访管理</a></li>
                <li><a href="/inquiry">综合查询</a></li>
                <li><a href="/statistic">统计分析</a></li>
                <li><a href="/system">系统管理</a></li>
            </ul>
        </div>
        </div>
    
    </nav>
@show
    <div class="container"> 
        @yield('content') 
    </div>
</body>
</html>