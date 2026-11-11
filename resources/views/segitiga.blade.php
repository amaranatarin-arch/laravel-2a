<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{$judul}}</title>
</head>
<body>
  <h1>{{$judul}}</h1>
  <form action="/kalkulator/segitiga/proses" method="post">
    @csrf
    <p>
      1/2 x <input type="number" name="alas" value="{{$alas}}"> x
      <input type="number" name="tinggi" value="{{$tinggi}}"> =
      {{$hasil}}
    </p>
    <button type="submit">HITUNG</button>
  </form>
</body>
</html>