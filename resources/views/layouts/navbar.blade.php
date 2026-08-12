<nav class="navbar navbar-expand-lg shadow-sm" style="background:#F8C8D8;">
    <div class="container">

        <a class="navbar-brand fw-bold" style="color:#5F5F5F;" href="{{ route('dashboard') }}">
             POS
        </a>

        <button class="navbar-toggler"
                style="background:#E8E8E8;"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-4">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'fw-bold' : '' }}"
                       style="color:#5F5F5F;"
                       href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/users') ? 'fw-bold' : '' }}"
                       style="color:#5F5F5F;"
                       href="{{ route('admin.users') }}">
                        Users
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('produk*') ? 'fw-bold' : '' }}"
                       style="color:#5F5F5F;"
                       href="{{ route('produk.index') }}">
                        Produk
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penjualan*') ? 'fw-bold' : '' }}"
                       style="color:#5F5F5F;"
                       href="{{ route('penjualan.index') }}">
                        Penjualan
                    </a>
                </li>

            </ul>


            <form class="ms-auto"
                  action="{{ route('logout') }}"
                  method="POST">

                @csrf

                <button class="btn fw-bold"
                        style="background:#E8E8E8; color:#5F5F5F;">
                    Logout
                </button>

            </form>


        </div>

    </div>
</nav>