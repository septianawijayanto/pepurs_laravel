@extends('layouts.admin.master')
@section('konten')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{{$title}}</h3>

    </div>
    <div class="panel-body">
        <button type="button" class="btn btn-warning btn-xs btn-refresh"><i class="fa fa-refresh"></i></button>
        <button id="tombol-tambah" data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></button>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <!-- Tabel -->
            <table class="table table-responsiv mytable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$dt)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->username}}</td>

                        <td>
                            <a href="{{url('admin/admin/edit/'.$dt->id)}}" class="btn btn-success btn-xs btn-flat"><i class="lnr lnr-pencil"></i></a>
                            <a href="{{url('admin/admin/delete/'.$dt->id)}}" class="btn btn-danger btn-xs btn-flat" onclick="return confirm ('Apakah Akan Anda Hapus?')"><i class="lnr lnr-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Tabel -->
        </div>
    </div>
</div>

<!--Modal-->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/admin/create') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('nama') ? 'has-error' :''}}">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="inputnama" placeholder="Input nama" value="{{old('nama')}}">
                        @if($errors->has('nama'))
                        <span class="right label label-danger" class=" help-block">{{$errors->first('nama')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('username') ? 'has-error' :''}}">
                        <label for="exampleFormControlInput1">Username</label>
                        <input name="username" type="text" class="form-control" id="inputusername" placeholder="Input Username" value="{{old('username')}}">
                        @if($errors->has('username'))
                        <span class="right label label-danger" class=" help-block">{{$errors->first('username')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('password') ? 'has-error' :''}}">
                        <label for="exampleFormControlInput1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Input Password" value="{{old('password')}}">
                        @if($errors->has('password'))
                        <span class="right label label-danger" class=" help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa  fa-power-off"></i> Tutup</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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