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
        <div class="row">
            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: blue;" class="icon"><i class="fa fa-users"></i></span>
                    <p>
                        <span class="number">{{$as}}</span>
                        <span class="title">Anggota</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: pink;" class="icon"><i class="fa fa-users"></i></span>
                    <p>
                        <span class="number">{{$ag}}</span>
                        <span class="title">Anggota</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: red;" class="icon"><i class="fa fa-user"></i></span>
                    <p>
                        <span class="number">{{$ast}}</span>
                        <span class="title">Anggota</span>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: purple;" class="icon"><i class="fa fa-book"></i></span>
                    <p>
                        <span class="number">{{$buku}}</span>
                        <span class="title">Buku</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: blue;" class="icon"><i class="lnr lnr-pencil"></i></span>
                    <p>
                        <span class="number">{{$transaksi}}</span>
                        <span class="title">Peminjaman</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span style="background-color: blue;" class="icon"><i class="fa fa-check"></i></span>
                    <p>
                        <span class="number">{{$selesai}}</span>
                        <span class="title">Selesai</span>
                    </p>
                </div>
            </div>
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