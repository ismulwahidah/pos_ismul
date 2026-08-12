@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container my-4">
    <div class="mb-3">
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">
            &larr; Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Produk: {{ $produk->nama }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-3">
                    <img src="{{ asset('storage/' . $produk->foto) }}" 
                         alt="{{ $produk->nama }}" 
                         class="img-fluid rounded border shadow-sm">
                </div>

                <div class="col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <th width="30%">Nama Produk</th>
                            <td>{{ $produk->nama }}</td>
                        </tr>
                        <tr>
                            <th>Dibuat Oleh</th>
                            <td>{{ $produk->user->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Harga Beli</th>
                            <td>Rp {{ number_format($produk->harga_beli, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Harga Jual</th>
                            <td>Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $produk->stok }} unit</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection