

<?php $__env->startSection('title', 'Tentang Aplikasi & Pengembang'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Blok CSS Tambahan Mengikuti Desain Premium Dasbor Anda -->
<style>
    body {
        background-color: #f8fafc !important;
    }
    .shadow-premium {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03) !important;
    }
    .card-about-app {
        background: #ffffff;
        background: linear-gradient(135deg, #758db8, #f1faee);
        background: linear-gradient(135deg, #758db8, #f1faee);
        background: linear-gradient(135deg, #758db8, #f1faee);
        border-left: 5px solid #84a0db !important;
        border-top: 1px solid #e2e8f0;
        border-right: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
    }
</style>

<div class="container py-4">
    <!-- Judul Halaman -->
    <div class="text-center text-md-start border-bottom pb-3 mb-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
            <h1 class="h2 fw-bold text-dark mb-1">Informasi Sistem</h1>
            <p class="text-muted mb-0 fw-medium">Detail aplikasi dan profil manajemen pengembang</p>
        </div>
        <span class="badge bg-secondary px-3 py-2 rounded-pill shadow-sm">Application Profile</span>
    </div>

    <div class="row g-4">
        <!-- Bagian Kiri: Tentang Aplikasi (Gaya Card Dasbor) -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-premium card-about-app h-100">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold mb-3" style="color: #175ffa;">
                        <span class="me-2">💻</span> Kosmetik Scora 
                    </h2>
                    <p class="text-secondary leading-relaxed mb-4">
                        Aplikasi ini dirancang khusus sebagai sistem Point of Sales (POS) pintar untuk mempermudah pengelolaan stok, memantau produk kosmetik terlaris, dan mencarat transaksi penjualan secara real-time.
                    </p>
                    
                    <hr class="text-muted my-3">
                    
                    <h3 class="h6 fw-bold text-dark mb-3">Fitur Utama Sistem:</h3>
                    <div class="d-flex flex-column gap-2 text-secondary">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-success">✔</span> Dashboard Monitoring (Stok Kritis, Rendah & Habis)
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-success">✔</span> Manajemen Produk, Jenis, dan Kategori Kosmetik
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-success">✔</span> Pencatatan Penjualan Terintegrasi (Tunai & Non-Tunai)
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-success">✔</span> Manajemen Data Pengguna & Hak Akses
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-2">
                        <span class="badge bg-light text-dark border px-3 py-2 rounded">Versi Aplikasi: 1.0.0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Kanan: Profil Pengembang (Gaya Card Dasbor) -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-premium h-100 bg-white">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold mb-4" style="color: #211deb;">
                        <span class="me-2">👤</span> Profil Pengembang
                    </h2>
                    
                    <div class="d-flex flex-column gap-3">
                        <!-- Baris Nama -->
                        <div class="d-flex align-items-center p-3 rounded-3 border bg-light">
                            <div class="rounded-3 d-flex align-items-center justify-content-center me-3 text-white shadow-sm" style="background-color: #006d80; width: 42px; height: 42px;">
                            
                                <i class="bi bi-card-text fs-5"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.65rem;">Nama Lengkap</small>
                                <span class="fw-bold text-dark" style="font-size: 0.95rem;">Ismul Wahidah</span>
                            </div>
                        </div>

                        <!-- Baris Kelas -->
                        <div class="d-flex align-items-center p-3 rounded-3 border bg-light">
                            <div class="rounded-3 d-flex align-items-center justify-content-center me-3 text-white shadow-sm" style="background-color: #006d80; width: 42px; height: 42px;">
                                <i class="bi bi-mortarboard-fill fs-5"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.65rem;">Kelas</small>
                                <span class="fw-bold text-dark" style="font-size: 0.95rem;">XII RPL 3</span>
                            </div>
                        </div>

                        <!-- Baris Alamat -->
                        <div class="d-flex align-items-center p-3 rounded-3 border bg-light">
                            <div class="rounded-3 d-flex align-items-center justify-content-center me-3 text-white shadow-sm" style="background-color: #006d80; width: 42px; height: 42px;">
                            
                                <i class="bi bi-geo-alt-fill fs-5"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.65rem;">Alamat</small>
                                <span class="fw-bold text-dark" style="font-size: 0.95rem;">Tasikmalaya, Jawa Barat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ismul\resources\views/tentang.blade.php ENDPATH**/ ?>