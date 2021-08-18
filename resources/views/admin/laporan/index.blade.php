@extends('layouts.admin.master')
@section('konten')
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $title }}</h3>

        </div>
        <div class="panel-body">
            <button type="button" class="btn btn-warning btn-xs btn-refresh"><i class="fa fa-refresh"></i></button>
            <div class="btn-group dropdown float-right">
                <button type="button" class="btn btn-sm btn-flat btn-primary  dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <b><i class="fa fa-printh"></i> Cetak Laporan</b>
                </button>
                <div class="dropdown-menu " x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                    <a href="{{ url('admin/laporan/pdf') }}" class="dropdown-item"> Transaksi Semua</a>
                    <br>
                    <a href="{{ url('admin/laporan/peminjamanpdf?status=pinjam') }}" class="dropdown-item"> Transaksi
                        Dipinjam</a>
                    <br>
                    <a href="{{ url('admin/laporan/peminjamanpdf?status=kembali') }}" class="dropdown-item"> Transaksi
                        Pengembalian</a>
                    <br>
                    <a href="{{ url('admin/laporan/peminjamanpdf?status=rusak') }}" class="dropdown-item">Transaksi
                        Rusak</a>
                    <br>
                    <a href="{{ url('admin/laporan/peminjamanpdf?status=hilang') }}" class="dropdown-item"> Transaksi
                        Hilang</a>
                    <br>
                    <a href="!#" class="dropdown-item btn-priodepdf" data-toggle="modal" data-target="#modal">Transaksi
                        Periode</a>
                    <br>
                    <a href="{{ url('admin/laporan/anggotapdf') }}" class="dropdown-item"> Laporan Anggota</a>
                    <br>
                    <a href="{{ url('admin/laporan/bukupdf') }}" class="dropdown-item"> Laporan Buku</a>
                </div>
            </div>

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
                            <th>Status</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $e => $dt)
                            <tr>

                                <td>{{ $e + 1 }}</td>
                                <td>{{ $dt->kode_transaksi }}</td>
                                <td>{{ $dt->buku->judul }}</td>
                                <td>{{ $dt->anggota->nama }}</td>
                                <td>{{ $dt->tgl_pinjam }}</td>
                                <td>{{ $dt->tgl_kembali }}</td>
                                <td>
                                    @if ($dt->status == 'proses')
                                        <span class="label label-info">Proses</span>
                                    @elseif($dt->status=='pinjam')
                                        <span class="label label-primary">Dipinjam</span>
                                    @elseif($dt->status=='kembali')
                                        <span class="label label-success">Kembali</span>
                                    @elseif($dt->status=='rusak')
                                        <span class="label label-danger">Rusak</span>
                                    @elseif($dt->status=='hilang')
                                        <span class="label label-warning">Hilang</span>
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($dt->denda) }}</td>
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
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    Pilih Panggal
                </div>
                <div class="modal-body">

                    <form role="form" action="{{ url('admin/laporan/periodepdf') }}" method="get">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Dari Tanggal</label>
                                <input type="date" class="form-control datepicker" id="inputtgl" placeholder="Dari Tanggal"
                                    name="dari" autocomplete="off" value="{{ date('Y-m-d') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Sampai tanggal</label>
                                <input type="date" class="form-control datepicker" name="sampai" id="inputtgl2"
                                    placeholder="Sampai Tanggal" autocomplete="off" value="{{ date('Y-m-d') }}">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa  fa-power-off"></i> Tutup</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
