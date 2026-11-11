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
  <div class="container mt-5" style="max-width: 600px;">
    <div class="card card-krem shadow-sm">
      <div class="card-body text-center">
        <h1 class="mb-4">{{$judul}}</h1>
        <form action="/kalkulator/segitiga/proses" method="post">
          @csrf
          <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
            <span>1/2 x</span>
            <input type="number" name="alas" class="form-control w-25" placeholder="Alas" value="{{$alas}}">
            <span>x</span>
            <input type="number" name="tinggi" class="form-control w-25" placeholder="Tinggi" value="{{$tinggi}}">
            <span>=</span>
            <strong>{{$hasil}}</strong>
          </div>
          <button type="submit" class="btn btn-hijau px-4">HITUNG</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>