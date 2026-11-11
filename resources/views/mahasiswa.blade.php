<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$judul}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">{{$judul}}</h1>
    <table class="table table-bordered table-striped text-center tabel-hijau">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Gender</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mahasiswa as $m)
        <tr>
          <td>{{$m['nama']}}</td>
          <td>{{$m['alamat']}}</td>
          <td>{{$m['gender']}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>