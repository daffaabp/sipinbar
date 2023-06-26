<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
            <span class="align-middle" style="font-size: 23px"><span style="color: transparent">aaa</span>SI-PINBAR</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu Utama
            </li>

            {{-- @if (\Illuminate\Support\Facades\Auth::user()->type == 1) --}}

            <li class="sidebar-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Beranda Admin</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" data-toggle="collapse" href="#data-peminjam" aria-expanded="false"
                    aria-controls="data-peminjam">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="menu-title">Data Peminjam <span style="color: transparent">Data</span></span>
                    <i class="align-midle" data-feather="chevrons-right"></i>
                </a>
                <div class="collapse" id="data-peminjam">
                    <ul class="sidebar flex-column sub-menu">
                        <li class="sidebar-item" style="list-style: none">
                            <a class="sidebar-link" href="">
                                <i class="align-middle" data-feather="eye"></i>
                                <span class="align-middle">Lihat Data Peminjam</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="list-style: none">
                            <a class="sidebar-link" href="">
                                <i class="align-middle" data-feather="folder-plus"></i>
                                <span class="align-middle">Form Data Peminjam</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-item {{ Route::is('barang.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('barang.index') }}">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Data Barang</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Permintaan
                        Peminjaman</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle"
                        style="font-size: 13.95px">Permintaan
                        Pengembalian</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
