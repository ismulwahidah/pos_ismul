<nav class="navbar navbar-expand-lg shadow-sm" style="background: #758db8;">
    <div class="container">
        <!-- Brand & Nama Toko -->
        <div class="d-flex align-items-center">
            <!-- Diperbaiki: Menambahkan }} setelah tanda petik tunggal untuk menutup tag Blade -->
            <a class="navbar-brand fw-bold text-white fs-4 me-2" href="{{ Route::has('tentang') ? route('tentang') : '#' }}">
                Kosmetik Scora
            </a>
        </div>

        <!-- Toggler Button untuk Mobile -->
        <button class="navbar-toggler" style="background: #E8EEF8;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-4">
                <!-- Menu Dashboard (Dikembalikan agar halaman utama bisa diakses) -->
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('dashboard') ? 'fw-bold active' : '' }}" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>
                <!-- Menu Tentang / Store -->
    
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('admin/users') ? 'fw-bold active' : '' }}" href="{{ route('admin.users') }}">
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('Jenis*') ? 'fw-bold active' : '' }}" href="{{ route('Jenis.index') }}">
                        Jenis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('produk*') ? 'fw-bold active' : '' }}" href="{{ route('produk.index') }}">
                        Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('penjualan*') ? 'fw-bold active' : '' }}" href="{{ route('penjualan.index') }}">
                        Penjualan
                    </a>
                </li>
            </ul>

            <!-- Tombol Logout -->
            <form class="d-flex ms-auto" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn fw-bold" style="background: #E8EEF8; color: #5F78A5;">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
