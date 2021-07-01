@extends('layouts.anggota.master')
@section('konten')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{{$title}}</h3>

    </div>
    <div class="panel-body">
        <button type="button" class="btn btn-warning btn-xs btn-refresh"><i class="fa fa-refresh"></i></button>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <!-- Tabel -->
            <table class="table table-responsiv mytable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Judul</th>
                        <th>Peminjam</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Denda</th>
                        <th>Status</th>
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
                        <td>
                            @if($dt->status_denda=='belum lunas')
                            <span class="label label-warning">Rp. {{number_format($dt->denda)}} (BL) </span>
                            @elseif($dt->status_denda=='lunas')
                            <span class="label label-success">Rp. {{number_format($dt->denda)}} (L)</span>
                            @else
                            <span class="label label-success">Rp. {{number_format($dt->denda)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($dt->status=='proses')
                            <span class="label label-info">Proses</span>
                            @elseif($dt->status=='pinjam')
                            <span class="label label-primary">Dipinjam</span>
                            @elseif($dt->status=='kembali')
                            <span class="label label-success">Kembali</span>
                            @elseif($dt->status=='rusak')
                            <span class="label label-danger">Rusak</span>
                            @elseif($dt->status=='hilang')
                            <span class="label label-warning">Kembali</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </body>


            </table>
            <!-- End Tabel -->
        </div>
    </div>
</div>


@endsection
@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {

        // btn refresh
        $('.btn-refresh').click(function(e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })

    })
</script>

@endsection