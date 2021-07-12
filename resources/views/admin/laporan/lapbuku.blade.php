@extends('admin.laporan.master')
@section('konten')
<h5 class="center"><u> LAPORAN DATA BUKU</u></h5>
<table id="pseudo-demo">
    <thead>
        <tr>
            <td>No</td>
            <td>ISBN</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Lokasi</td>
            <td>Jumlah Buku</td>
            <td>Sumber</td>
            <td>Jumlah Dipinjam</td>
            <td>Rusak</td>
            <td>Hilang</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $e=>$dt)

        <tr>
            <td>{{$e+1}}</td>
            <td>{{$dt->isbn}}</td>
            <td>{{$dt->judul}}</td>
            <td>{{$dt->pengarang}}</td>
            <td>{{$dt->penerbit}}</td>
            <td>{{$dt->lokasi}}</td>
            <td>{{$dt->jml_buku}}</td>
            <td>{{$dt->sumber}}</td>
            <td>{{$dt->jml_dipinjam}}</td>
            <td>{{$dt->rusak}}</td>
            <td>{{$dt->hilang}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection