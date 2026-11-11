<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{$judul}}</title>
</head>
<body>
  <h1>{{$judul}}</h1>
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Gender</th>
    </tr>
    @foreach ($mahasiswa as $m)
    <tr>
      <td>{{$m['nama']}}</td>
      <td>{{$m['alamat']}}</td>
      <td>{{$m['gender']}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>