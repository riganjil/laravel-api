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
<form method="post" action="{{url('jenis/update')}}">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$data->kode_jenis}}">
    <input type="text" name="kode_jenis" value="{{$data->kode_jenis}}" disabled=""><br>
    <input type="text" name="nama_jenis" value="{{$data->nama_jenis}}"><br>
    <input type="submit" name="update" value="Update">
    <a href="{{url()->previous()}}">Kembali</a>
</form>
</body>
</html>