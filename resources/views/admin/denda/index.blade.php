@extends('layouts.admin.master')
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
                        <th>Status Denda</th>
                        <th>Aksi</th>
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
                        <td>Rp. {{number_format($dt->denda)}}</td>
                        <td>
                            @if($dt->status_denda=='belum lunas')
                            <span class="label label-warning">Belum Lunas</span>
                            @elseif($dt->status_denda=='lunas')
                            <span class="label label-success">Lunas</span>
                            @endif
                        </td>
                        <td>
                            @if($dt->status_denda=='belum lunas')
                            <a href="{{url('admin/denda/lunasi/'.$dt->id)}}" class="btn btn-primary btn-xs btn-flat">Lunasi</a>
                            @elseif($dt->status_denda=='lunas')
                            <a href="{{url('admin/denda/kwitansi/'.$dt->id)}}" class="btn btn-warning btn-xs btn-flat">Kwitansi</a>

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

<!--Modal-->

<!--End Modal-->
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