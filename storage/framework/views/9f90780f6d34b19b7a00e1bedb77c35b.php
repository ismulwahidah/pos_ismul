 

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Daftar Jenis Produk</h2>
    
    <!-- Tombol Tambah -->
    <a href="<?php echo e(route('Jenis.create')); ?>" class="btn btn-primary mb-3">Tambah Jenis</a>

    <!-- Tabel Data -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $__empty_1 = true; $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($item->nama_jenis); ?></td>
                    <td>
                        <!-- Tombol Edit & Hapus -->
                        <a href="<?php echo e(route('Jenis.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3" class="text-center">Belum ada data jenis produk.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/jenis/index.blade.php ENDPATH**/ ?>