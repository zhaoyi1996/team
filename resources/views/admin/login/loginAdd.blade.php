
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员注册</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
    <center>
    <h2>管理员登录</h2>
    <a href="/login" class="btn btn-info btn-sm">已经有账号了？去登录</a>
        <form action="/login/loginAddDo" method="post">
            <table >
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="a_name"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="a_pwd"></td>
                </tr>
                <tr>
                    <td>管理员级别</td>
                    <td>
                        <input type="radio" name="a_level" value="1" checked>主管
                        <input type="radio" name="a_level" value="2">系统管理员
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-primary">注册</button>
                    </td>
                </tr>
            </table>
        </form>
    </center> 
</body>
</html>

