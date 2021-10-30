<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>BIODATA</legend>
        <table>
    @if ($nama == null)
    <h1><center>silahkan isi biodata anda</center></h1>
    @elseif ($nama != null)
<tr>
    <th>nama</th>
    <td>:</td>
    <td> {{$nama}}</td>
</tr>
    @endif
    @if ($alamat !=  null)
<tr>
    <th>Alamat</th>
    <td>:</td>
    <td>{{$alamat}}</td>
</tr>
@endif
    @if ($ttl !=  null)
    <tr>
   <th> tanggal lahir</th>
    <td>:</td>
   <td>{{$ttl}}</td>
</tr>
@endif
    @if ($tb !=  null)
<tr>
    <th>tinggi badan</th>
    <td>:</td>
    <td>{{$tb}}</td>
</tr>
<tr>
    @endif
    @if ($bb !=  null)
    <th> berat badan</th>
    <td>:</td>
    <td>{{$bb}}</td>
</tr>
@endif
</table>
</fieldset>
</body>
</html>
