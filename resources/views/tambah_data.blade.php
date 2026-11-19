@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>
<form method="post" action="/employe/store">
    @csrf
    <table border="0" align="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2"></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endsection