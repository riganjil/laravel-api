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
    <form method="post" action="{{url('auth/register')}}">
        {{csrf_field()}}
        <input type="username" name="username" placeholder="username"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="telepon" name="telepon" placeholder="telepon"><br>
        <input type="nama" name="nama" placeholder="Nama Lengkap"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="register" value="Register"><br>
    </form>
</body>
</html>