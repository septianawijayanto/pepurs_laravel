@extends('admin.laporan.master')
@section('konten')
<h5 class="center"><u> Kartu Perpustakaan</u></h5>
<table>
    <tbody>

        <tr>
            <td style="border: 0px;">Tempat & Tanggal Lahir </td>
            <td style="border: 0px;">: {{$data->tempat_lahir}}, {{$data->tgl_lahir}}</td>
        </tr>


        <tr>
            <td style="border: 0px;">Jenis Kelamin</td>
            <td style="border: 0px;">: {{$data->jk}}</td>
            <!-- <td style="border: 0px;">4. Diwajibkan meminjam minimal 15 judul buku dalam satu semester </td> -->
        </tr>
        <tr>
            <td style="border: 0px;">Alamat</td>
            <td style="border: 0px;">: {{$data->alamat}}</td>
            <!-- <td style="border: 0px;">5. Buku yang dipinjam dijaga dengan baik, jika rusak/hilang wajib menggantinya </td> -->
        </tr>
        <tr>
            <td style="border: 0px;">No Hp</td>
            <td style="border: 0px;">: {{$data->no_hp}}</td>
            <!-- <td style="border: 0px;">6. lebih jelas dapat di lihat di Perpustakaan SMP Negeri 5 Pelepat </td> -->
        </tr>
    </tbody>
</table>
@endsection