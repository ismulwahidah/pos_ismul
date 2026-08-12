

<?php $__env->startSection('title', 'Detail Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="mb-3">
        <a href="<?php echo e(route('produk.index')); ?>" class="btn btn-secondary">
            &larr; Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Produk: <?php echo e($produk->nama); ?></h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-3">
                    <img src="<?php echo e(asset('storage/' . $produk->foto)); ?>" 
                         alt="<?php echo e($produk->nama); ?>" 
                         class="img-fluid rounded border shadow-sm">
                </div>

                <div class="col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <th width="30%">Nama Produk</th>
                            <td><?php echo e($produk->nama); ?></td>
                        </tr>
                        <tr>
                            <th>Dibuat Oleh</th>
                            <td><?php echo e($produk->user->name ?? '-'); ?></td>
                        </tr>
                        <tr>
                            <th>Harga Beli</th>
                            <td>Rp <?php echo e(number_format($produk->harga_beli, 0, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <th>Harga Jual</th>
                            <td>Rp <?php echo e(number_format($produk->harga_jual, 0, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?php echo e($produk->stok); ?> unit</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/produk/show.blade.php ENDPATH**/ ?>