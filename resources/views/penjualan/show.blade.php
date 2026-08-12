@extends('layouts.app')

@section('title', 'Detail Penjualan')

@section('content')

@include('layouts.navbar')

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Detail Penjualan #{{ $penjualan->id }}</h2>
        <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
            &larr; Kembali
        </a>
    </div>

    <div class="row">
        {{-- Ringkasan Transaksi --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Info Transaksi</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th class="ps-0">Tanggal</th>
                            <td>: {{ $penjualan->created_at ? $penjualan->created_at->translatedFormat('d F Y H:i') : '-' }}</td>
                        </tr>
                        <tr>
                            <th class="ps-0">Kasir</th>
                            <td>: {{ $penjualan->user->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th class="ps-0">Metode</th>
                            <td>: <span class="badge bg-secondary">{{ strtoupper($penjualan->metode_pembayaran) }}</span></td>
                        </tr>
                        <tr>
                            <th class="ps-0">Status</th>
                            <td>: 
                                <span class="badge {{ $penjualan->status == 'selesai' ? 'bg-success' : 'bg-warning' }}">
                                    {{ ucfirst($penjualan->status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="ps-0">Total</th>
                            <td class="fw-bold text-success">: Rp {{ number_format($penjualan->total_pembayaran, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        {{-- Rincian Barang yang Dibeli --}}
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
                                {{-- Memuat relasi itemPenjualan/items --}}
                                @forelse($penjualan->itemPenjualan ?? $penjualan->items ?? [] as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->produk->nama ?? 'Produk dihapus' }}</td>
                                    <td>Rp {{ number_format($item->harga_satuan ?? $item->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>Rp {{ number_format(($item->harga_satuan ?? $item->harga) * $item->jumlah, 0, ',', '.') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-3 text-muted">
                                        Tidak ada item rincian untuk transaksi ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection