


<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="card-body">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold text-dark mb-1">
                <i class="bi bi-people-fill"></i> Manajemen Users
            </h2>

            <small class="text-muted">
                Kelola akun admin dan kasir
            </small>
        </div>

        <a href="<?php echo e(route('admin.users.create')); ?>"
           class="btn rounded-pill px-4"
           style="background:#758db8; color:#fff; border:1px solid #5F78A5;">

            <i class="bi bi-plus-circle"></i>
            Tambah User

        </a>

    </div>


    

    <form action="<?php echo e(route('admin.users')); ?>" method="GET">

        <div class="input-group mb-4">

            <span class="input-group-text bg-white">
                <i class="bi bi-search text-dark"></i>
            </span>

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Cari nama atau email..."
                value="<?php echo e(request('search')); ?>"
            >

            <button
                class="btn"
                style="background:#758db8; color:#fff; border:1px solid #5F78A5;">

                <i class="bi bi-search"></i>
                Cari

            </button>

        </div>

    </form>


    

    <div class="table-responsive">

        <table class="table align-middle">

            <thead>

                <tr>

                    <th class="text-dark">No</th>

                    <th class="text-dark">Nama</th>

                    <th class="text-dark">Email</th>

                    <th class="text-dark">Role</th>

                    <th class="text-dark" width="200">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    

                    <td class="text-dark">
                        <?php echo e($users->firstItem() + $loop->index); ?>

                    </td>


                    

                    <td class="fw-semibold text-dark">
                        <?php echo e($user->name); ?>

                    </td>


                    

                    <td class="text-dark">
                        <?php echo e($user->email); ?>

                    </td>


                    

                    <td>

                        <?php if($user->role->name == 'admin'): ?>

                            <span
                                class="badge rounded-pill"
                                style="background:#758db8; color:#fff;">

                                Admin

                            </span>

                        <?php else: ?>

                            <span
                                class="badge rounded-pill"
                                style="background:#D9D9D9; color:#000;">

                                Kasir

                            </span>

                        <?php endif; ?>

                    </td>


                    

                    <td>

                        

                        <a
                            href="<?php echo e(route('admin.users.edit', $user->id)); ?>"
                            class="btn btn-sm me-1"
                            style="
                                background:#E8EEF8;
                                color:#5F78A5;
                                border:1px solid #C9D6EA;
                            ">

                            <i class="bi bi-pencil-square"></i>
                            Edit

                        </a>


                        

                        <form
                            action="<?php echo e(route('admin.users.destroy', $user)); ?>"
                            method="POST"
                            class="d-inline">

                            <?php echo csrf_field(); ?>

                            <?php echo method_field('DELETE'); ?>

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus user ini?')"
                                class="btn btn-sm"
                                style="
                                    background:#D9534F;
                                    color:#fff;
                                    border:1px solid #D9534F;
                                ">

                                <i class="bi bi-trash"></i>
                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>

                    <td
                        colspan="5"
                        class="text-center py-5">

                        <i
                            class="bi bi-inbox fs-1 text-dark">
                        </i>

                        <p class="mt-2 text-muted">
                            Tidak ada data user.
                        </p>

                    </td>

                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>


    

    <div class="mt-4">

        <?php echo e($users->links('pagination::bootstrap-5')); ?>


    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/users/index.blade.php ENDPATH**/ ?>