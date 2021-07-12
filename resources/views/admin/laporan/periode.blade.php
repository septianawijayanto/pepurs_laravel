@extends('admin.laporan.master')
@section('konten')
<h5 class="center"><u> LAPORAN DATA TRANSAKSI {{ $dari}} SAMPAI {{$sampai}}</u></h5>
<table id="pseudo-demo">
    <thead>
        <tr>
            <td>No</td>
            <td>Kode</td>
            <td>Judul</td>
            <td>Peminjam</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
            <td>Status</td>
            <td>Denda</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $e=>$dt)

        <tr>
            <td>{{$e+1}}</td>
            <td>{{$dt->kode_transaksi}}</td>
            <td>{{$dt->buku->judul}}</td>
            <td>{{$dt->anggota->nama}}</td>
            <td>{{$dt->tgl_pinjam}}</td>
            <td>{{$dt->tgl_kembali}}</td>
            <td>{{$dt->status}}</td>
            <td>{{$dt->ket}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection