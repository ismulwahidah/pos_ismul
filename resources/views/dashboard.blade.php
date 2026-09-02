
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('layouts.navbar')

<style>

    body {
        background: #F4F7FC;
        color: #2E3A4F;
    }

    .dashboard-card {
        border: none;
        border-radius: 14px;
        overflow: hidden;
        background: #FFFFFF;
        box-shadow: 0 8px 22px rgba(60, 85, 125, 0.08);
    }

    /* Header Card Biru */
    .blue-header {
        background: #758db8;
        color: #FFFFFF;
        border: none;
        padding: 11px 16px;
    }

    /* Badge Peringatan */
    .warning-badge {
        background: #E8EEF8;
        color: #5F78A5;
        padding: 5px 9px;
        border: 1px solid #C9D6EA;
    }

    /* Badge Kritis */
    .critical-badge {
        background: #D9E2F2;
        color: #4E6792;
        padding: 5px 9px;
        border: 1px solid #B8C8E0;
    }

    /* Stok Rendah */
    .stock-badge {
        background: #E8EEF8;
        color: #5F78A5;
        padding: 5px 8px;
        border: 1px solid #C9D6EA;
    }

    /* Stok Habis */
    .critical-stock {
        background: #D9E2F2;
        color: #4E6792;
        padding: 5px 8px;
        border: 1px solid #B8C8E0;
    }

    /* Table */
    .dashboard-card .table {
        margin-bottom: 0;
    }

    .dashboard-card .table thead th {
        color: #2E3A4F;
        font-weight: 700;
        border-bottom: 1px solid #D9E2F2;
        background: #FFFFFF;
    }

    .dashboard-card .table tbody td {
        color: #2E3A4F;
        border-bottom: 1px solid #D9E2F2;
    }

    .dashboard-card .table tbody tr:hover {
        background: #EEF3FB;
    }

    /* Judul */
    h1,
    h2 {
        color: #2E3A4F;
    }

    .section-title {
        color: #5F78A5;
        font-weight: 700;
    }

    .page-title {
        color: #5F78A5;
        font-weight: 700;
    }

    /* Warna teks biru */
    .text-blue-main {
        color: #758db8;
    }

    .text-blue-dark {
        color: #5F78A5;
    }

    /* Header Card */
    .bg-blue-primary {
        background: #758db8;
        color: #FFFFFF;
    }

    .bg-blue-medium {
        background: #8FA6D1;
        color: #FFFFFF;
    }

    .bg-soft-blue {
        background: #E8EEF8;
        color: #5F78A5;
    }

    .bg-soft-blue2 {
        background: #D9E2F2;
        color: #5F78A5;
    }

    /* Pagination */
    .pagination .page-link {
        color: #758db8;
        border-color: #C9D6EA;
    }

    .pagination .page-link:hover {
        background: #E8EEF8;
        color: #5F78A5;
    }

    .pagination .active .page-link {
        background: #758db8;
        border-color: #758db8;
        color: #FFFFFF;
    }

</style>

<div class="mb-4">
    <h2 class="page-title">
        Ringkasan Hari Ini
        <small class="fs-6 text-muted font-normal">
            ({{ $tanggalHariIni->translatedFormat('l, d F Y') }})
        </small>
    </h2>
</div>

@can('viewAny', App\Models\User::class)

<h3 class="section-title">Today's Sales</h3>

<div class="row mb-4">

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header bg-blue-primary">
                Total Nilai Penjualan Hari Ini
            </div>

            <div class="card-body text-center bg-white py-4">
                <h3 class="text-blue-main fw-bold m-0">
                    Rp {{ number_format($ringkasan['total_penjualan'] ?? 0,0,',','.') }}
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header bg-blue-primary">
                Jumlah Transaksi Hari Ini
            </div>

            <div class="card-body text-center bg-white py-4">
                <h3 class="text-blue-main fw-bold m-0">
                    {{ $ringkasan['total_transaksi'] ?? 0 }}
                </h3>
            </div>
        </div>
    </div>

</div>

<h3 class="section-title">Cash & Payment Status</h3>

<div class="row mb-5">

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header bg-blue-medium">
                Total Pembayaran Tunai
            </div>

            <div class="card-body text-center bg-white py-4">
                <h3 class="fw-bold text-blue-dark m-0">
                    Rp {{ number_format($ringkasan['total_cash'] ?? 0,0,',','.') }}
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header bg-blue-medium">
                Total Pembayaran Non Tunai
            </div>

            <div class="card-body text-center bg-white py-4">
                <h3 class="fw-bold text-blue-dark m-0">
                    Rp {{ number_format($ringkasan['total_non_tunai'] ?? 0,0,',','.') }}
                </h3>
            </div>
        </div>
    </div>

</div>

@endcan

<h3 class="section-title">Critical Inventory Status</h3>

<div class="row mb-5">

    <div class="col-md-6 mb-3">
        <div class="card">

            <div class="card-header bg-soft-blue d-flex justify-content-between align-items-center">
                <span>Daftar Produk Stok Rendah</span>

                <span class="badge warning-badge">
                    Peringatan
                </span>
            </div>

            <div class="card-body bg-white p-3">

                <table class="table table-hover align-middle mb-0">

                    <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th>Nama</th>
                            <th width="25%">Stok</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($produkStokRendah as $index => $produk)

                        <tr>
                            <td>{{ $produkStokRendah->firstItem() + $index }}</td>

                            <td>{{ $produk->nama }}</td>

                            <td>
                                <span class="badge stock-badge">
                                    {{ $produk->stok }}
                                </span>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">
                                Seluruh produk berada dalam kondisi stok aman.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

                <div class="mt-3">
                    {{ $produkStokRendah->links() }}
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-6 mb-3">

        <div class="card">

            <div class="card-header bg-soft-blue d-flex justify-content-between align-items-center">

                <span>Produk Habis Stok</span>

                <span class="badge critical-badge">
                    Kritis
                </span>

            </div>

            <div class="card-body bg-white p-3">

                <table class="table table-hover align-middle mb-0">

                    <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th>Nama</th>
                            <th width="25%">Stok</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($produkStokHabis as $index => $produk)

                        <tr>

                            <td>
                                {{ $produkStokHabis->firstItem() + $index }}
                            </td>

                            <td>
                                {{ $produk->nama }}
                            </td>

                            <td>
                                <span class="badge critical-stock">
                                    {{ $produk->stok }}
                                </span>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">
                                Seluruh produk berada dalam kondisi stok aman.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

                <div class="mt-3">
                    {{ $produkStokHabis->links() }}
                </div>

            </div>
        </div>

    </div>

</div>

<h3 class="section-title">Best Seller Products</h3>

<div class="card">

    <div class="card-body p-3">

        <table class="table table-hover align-middle mb-0">

            <thead>

                <tr>
                    <th>Nama</th>
                    <th width="20%">Stok</th>
                    <th width="20%">Unit Terjual</th>
                </tr>

            </thead>

            <tbody>

            @forelse($produkTerlaris as $produk)

                <tr>

                    <td class="fw-semibold text-blue-dark">
                        {{ $produk->nama }}
                    </td>

                    <td>
                        {{ $produk->stok }}
                    </td>

                    <td>

                        <span class="badge bg-soft-blue2 text-blue-dark fs-6 px-3">
                            {{ $produk->total_terjual }}
                        </span>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="text-center text-muted py-3">
                        Belum ada data penjualan.
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection

