<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Login</h3>
    <form method="post" action="{{url('auth/login')}}">
        {{csrf_field()}}
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
        <a href="{{url('auth/register')}}">Daftar disini</a>
    </form>
</body>
</html>