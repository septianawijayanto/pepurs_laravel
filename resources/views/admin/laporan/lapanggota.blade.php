@extends('admin.laporan.master')
@section('konten')
<h5 class="center"><u> LAPORAN DATA ANGGOTA</u></h5>
<table id="pseudo-demo">
    <thead>
        <tr>
            <td>No</td>
            <td>Kode Anggota</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>TTL</td>
            <td>Jenis Anggota</td>
            <td>No Hp</td>
            <td>Alamat</td>

        </tr>
    </thead>

    <tbody>
        @foreach ($data as $e=>$dt)
        <tr>
            <td>{{$e+1}}</td>
            <td>{{$dt->kode_anggota}}</td>
            <td>{{$dt->nama}}</td>
            <td>{{$dt->jk}}</td>
            <td>{{$dt->tempat_lahir}},{{$dt->tgl_lahir}}</td>
            <td>{{$dt->jenis_anggota}}</td>
            <td>{{$dt->no_hp}}</td>
            <td>{{$dt->alamat}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection