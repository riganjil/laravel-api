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
    @if(Auth::check())
        {{Auth::User()->username}} - {{Auth::User()->nama}}<br>
        <a href="{{url('auth/logout')}}">Keluar</a>
    @endif

    <br>
    <br>
    <br>
    <table>
        <tr>
            <td>No</td>
            <td>Nama jenis</td>
            <td colspan="2">Action</td>
        </tr>
        <?php $no=1 ?>
        @foreach($data as $row)
        <tr>
            <td>{{$no}}</td>
            <td>{{$row->nama_jenis}}</td>
            <td><a href="{{url('jenis', $row->kode_jenis)}}">edit</a></td>
            <td><a href="{{url('jenis', $row->kode_jenis)}}/hapus">hapus</a></td>
        </tr>
         <?php $no++ ?>
        @endforeach
    </table>
    <a href="{{url('jenis/add')}}">Tambah Data</a>
</body>
</html>