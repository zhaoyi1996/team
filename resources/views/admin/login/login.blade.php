
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登录</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <center>
    <h2>管理员登录</h2>
    <a href="/login/loginAdd" class="btn btn-info btn-sm">没有账号？去注册</a>
        <form action="/login/loginDo" method="post">
            <table>
            @csrf
                <tr>
                    <td>管理员名称</td>
                    <td>
                        <input type="text" name="a_name" >
                        <span style="color:red;">{{session('msg')}}</span>
                    </td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td>
                        <input type="password" name="a_pwd">
                        <span style="color:red;">{{session('msg')}}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">登录</button>
                    </td>
                </tr>
            </table>
        </form>
    </center> 
</body>
</html>

