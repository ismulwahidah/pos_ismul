

<?php $__env->startSection('title', 'Detail Penjualan'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Detail Penjualan #<?php echo e($penjualan->id); ?></h2>
        <a href="<?php echo e(route('penjualan.index')); ?>" class="btn btn-secondary">
            &larr; Kembali
        </a>
    </div>

    <div class="row">
        
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Info Transaksi</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th class="ps-0">Tanggal</th>
                            <td>: <?php echo e($penjualan->created_at ? $penjualan->created_at->translatedFormat('d F Y H:i') : '-'); ?></td>
                        </tr>
                        <tr>
                            <th class="ps-0">Kasir</th>
                            <td>: <?php echo e($penjualan->user->name ?? '-'); ?></td>
                        </tr>
                        <tr>
                            <th class="ps-0">Metode</th>
                            <td>: <span class="badge bg-secondary"><?php echo e(strtoupper($penjualan->metode_pembayaran)); ?></span></td>
                        </tr>
                        <tr>
                            <th class="ps-0">Status</th>
                            <td>: 
                                <span class="badge <?php echo e($penjualan->status == 'selesai' ? 'bg-success' : 'bg-warning'); ?>">
                                    <?php echo e(ucfirst($penjualan->status)); ?>

                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="ps-0">Total</th>
                            <td class="fw-bold text-success">: Rp <?php echo e(number_format($penjualan->total_pembayaran, 0, ',', '.')); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        
        <div class="col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Rincian Item Penjualan</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__empty_1 = true; $__currentLoopData = $penjualan->itemPenjualan ?? $penjualan->items ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->produk->nama ?? 'Produk dihapus'); ?></td>
                                    <td>Rp <?php echo e(number_format($item->harga_satuan ?? $item->harga, 0, ',', '.')); ?></td>
                                    <td><?php echo e($item->jumlah); ?></td>
                                    <td>Rp <?php echo e(number_format(($item->harga_satuan ?? $item->harga) * $item->jumlah, 0, ',', '.')); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-3 text-muted">
                                        Tidak ada item rincian untuk transaksi ini.
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/penjualan/show.blade.php ENDPATH**/ ?>