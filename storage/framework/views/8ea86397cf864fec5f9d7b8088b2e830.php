

<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container my-4">
    <h1>Halaman Produk</h1>

    
    <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Produk
    </a>

    
    <form action="<?php echo e(route('produk.index')); ?>" method="GET" class="mb-3">
        <div class="input-group">
            <input
                type="text"
                name="search"
                value="<?php echo e(request('search')); ?>"
                class="form-control"
                placeholder="Cari nama produk..."
            >
            <button class="btn btn-outline-secondary" type="submit">
                Cari
            </button>
        </div>
    </form>

    
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <th scope="row"><?php echo e($products->firstItem() + $loop->index); ?></th>
                    <td><?php echo e($product->user->name ?? '-'); ?></td>
                    <td>
                        <img src="<?php echo e(asset('storage/' . $product->foto)); ?>" width="80" class="img-thumbnail" alt="<?php echo e($product->nama); ?>">
                    </td>
                    <td><?php echo e($product->nama); ?></td>
                    <td>Rp <?php echo e(number_format($product->harga_beli, 0, ',', '.')); ?></td>
                    <td>Rp <?php echo e(number_format($product->harga_jual, 0, ',', '.')); ?></td>
                    <td><?php echo e($product->stok); ?></td>
                    <td>
                        <div class="d-flex gap-1">
                          <a href="<?php echo e(route('produk.show', $product)); ?>" class="btn btn-sm btn-info text-white">Detail</a>
                            <a href="<?php echo e(route('produk.edit', $product)); ?>" class="btn btn-sm btn-warning">Edit</a>

                            <form action="<?php echo e(route('produk.destroy', $product)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8" class="text-center py-4">
                        <p class="text-muted mb-0">Data produk tidak tersedia.</p>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            Showing <?php echo e($products->firstItem() ?? 0); ?> to <?php echo e($products->lastItem() ?? 0); ?> of <?php echo e($products->total()); ?> results
        </div>
        <div>
            <?php echo e($products->links('pagination::bootstrap-5')); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/produk/index.blade.php ENDPATH**/ ?>