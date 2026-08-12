@extends('layouts.app')

@section('title', 'Produk')

@section('content')

@include('layouts.navbar')

<div class="container my-4">
    <h1>Halaman Produk</h1>

    {{-- Tombol Tambah Produk --}}
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Produk
    </a>

    {{-- Pencarian --}}
    <form action="{{ route('produk.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                class="form-control"
                placeholder="Cari nama produk..."
            >
            <button class="btn btn-outline-secondary" type="submit">
                Cari
            </button>
        </div>
    </form>

    {{-- Tabel Produk --}}
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
                @forelse ($products as $product)
                <tr>
                    <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                    <td>{{ $product->user->name ?? '-' }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $product->foto) }}" width="80" class="img-thumbnail" alt="{{ $product->nama }}">
                    </td>
                    <td>{{ $product->nama }}</td>
                    <td>Rp {{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>
                        <div class="d-flex gap-1">
                          <a href="{{ route('produk.show', $product) }}" class="btn btn-sm btn-info text-white">Detail</a>
                            <a href="{{ route('produk.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('produk.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center py-4">
                        <p class="text-muted mb-0">Data produk tidak tersedia.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination Info & Links --}}
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            Showing {{ $products->firstItem() ?? 0 }} to {{ $products->lastItem() ?? 0 }} of {{ $products->total() }} results
        </div>
        <div>
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection