
<nav class="navbar navbar-expand-lg shadow-sm" style="background:#758db8;">
    <div class="container">

        <a class="navbar-brand fw-bold" style="color:#FFFFFF;" href="<?php echo e(route('dashboard')); ?>">
            POS
        </a>

        <button class="navbar-toggler"
                style="background:#E8EEF8;"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-4">

                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('dashboard') ? 'fw-bold' : ''); ?>"
                       style="color:#FFFFFF;"
                       href="<?php echo e(route('dashboard')); ?>">
                        Dashboard
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('admin/users') ? 'fw-bold' : ''); ?>"
                       style="color:#FFFFFF;"
                       href="<?php echo e(route('admin.users')); ?>">
                        Users
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('Jenis*') ? 'fw-bold' : ''); ?>"
                       style="color:#FFFFFF;"
                       href="<?php echo e(route('Jenis.index')); ?>">
                        Jenis
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('produk*') ? 'fw-bold' : ''); ?>"
                       style="color:#FFFFFF;"
                       href="<?php echo e(route('produk.index')); ?>">
                        Produk
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('penjualan*') ? 'fw-bold' : ''); ?>"
                       style="color:#FFFFFF;"
                       href="<?php echo e(route('penjualan.index')); ?>">
                        Penjualan
                    </a>
                </li>

            </ul>


            <form class="ms-auto"
                  action="<?php echo e(route('logout')); ?>"
                  method="POST">

                <?php echo csrf_field(); ?>

                <button class="btn fw-bold"
                        style="background:#E8EEF8; color:#5F78A5;">
                    Logout
                </button>

            </form>


        </div>

    </div>
</nav>
<?php /**PATH C:\laragon\www\pos_ismul\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>