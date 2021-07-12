<ul class="nav">
    <li><a href="{{ route('dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
    <li>
        <a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="fa fa-database"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages3" class="collapse ">
            <ul class="nav">
                <li><a href="{{ route('anggota')}}" class="">Anggota</a></li>
                <li><a href="{{ route('admin')}}" class="">Admin</a></li>
                <li><a href="{{ route('buku')}}" class="">Buku</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Transaksi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages2" class="collapse ">
            <ul class="nav">
                <li><a href="{{ route('peminjaman')}}" class="">Peminjaman</a></li>
                <li><a href="{{ route('pengembalian')}}" class="">Pengembalian</a></li>
                <li><a href="{{ route('denda')}}" class="">Denda</a></li>

            </ul>
        </div>
    </li>

    <li><a href="{{route('laporan')}}" class=""><i class="lnr lnr-dice"></i> <span>Laporan</span></a></li>

    <li><a href="{{url('keluar')}}" class=""><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>

</ul>