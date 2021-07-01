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
                        <th>Cover</th>
                        <th>Kode</th>
                        <th>ISBN</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Lokasi</th>
                        <th>Jumlah Buku</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$dt)
                    <tr>
                        <th>{{$e+1}}</th>
                        <td><a href="{{$dt->getAvatar()}}"> <img height="70px" width=" 50px" class="" src="{{$dt->getAvatar()}}" alt="Photo"></td>
                        <td>{{$dt->kode_buku}}</td>
                        <td>{{$dt->isbn}}</td>
                        <td>{{$dt->judul}}</td>
                        <td>{{$dt->pengarang}}</td>
                        <td>{{$dt->penerbit}}</td>
                        <td>{{$dt->lokasi}}</td>
                        <td>{{$dt->jml_buku}}</td>
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