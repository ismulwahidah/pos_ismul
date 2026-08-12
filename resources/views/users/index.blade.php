@extends('layouts.app')

@section('title', 'Users')

@section('content')

@include('layouts.navbar')

<div class="card-body">

```
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold text-dark mb-1">
            <i class="bi bi-people-fill"></i> Manajemen Users
        </h2>

        <small class="text-muted">
            Kelola akun admin dan kasir
        </small>
    </div>

    <a href="{{ route('admin.users.create') }}"
       class="btn rounded-pill px-4"
       style="background:#F8C8D8; color:#000; border:1px solid #E5AFC1;">

        <i class="bi bi-plus-circle"></i>
        Tambah User

    </a>

</div>


{{-- Search --}}

<form action="{{ route('admin.users') }}" method="GET">

    <div class="input-group mb-4">

        <span class="input-group-text bg-white">
            <i class="bi bi-search text-dark"></i>
        </span>

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Cari nama atau email..."
            value="{{ request('search') }}"
        >

        <button
            class="btn"
            style="background:#F8C8D8; color:#000; border:1px solid #E5AFC1;">

            <i class="bi bi-search"></i>
            Cari

        </button>

    </div>

</form>


{{-- Table --}}

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

        @forelse($users as $user)

            <tr>

                {{-- No --}}

                <td class="text-dark">
                    {{ $users->firstItem() + $loop->index }}
                </td>


                {{-- Nama --}}

                <td class="fw-semibold text-dark">
                    {{ $user->name }}
                </td>


                {{-- Email --}}

                <td class="text-dark">
                    {{ $user->email }}
                </td>


                {{-- Role --}}

                <td>

                    @if($user->role->name == 'admin')

                        <span
                            class="badge rounded-pill"
                            style="background:#F8C8D8; color:#000;">

                            Admin

                        </span>

                    @else

                        <span
                            class="badge rounded-pill"
                            style="background:#D9D9D9; color:#000;">

                            Kasir

                        </span>

                    @endif

                </td>


                {{-- Aksi --}}

                <td>

                    {{-- Edit --}}

                    <a
                        href="{{ route('admin.users.edit', $user->id) }}"
                        class="btn btn-sm me-1"
                        style="
                            background:#E8E8E8;
                            color:#000;
                            border:1px solid #BDBDBD;
                        ">

                        <i class="bi bi-pencil-square"></i>
                        Edit

                    </a>


                    {{-- Hapus --}}

                    <form
                        action="{{ route('admin.users.destroy', $user) }}"
                        method="POST"
                        class="d-inline">

                        @csrf

                        @method('DELETE')

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


        @empty

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

        @endforelse

        </tbody>

    </table>

</div>


{{-- Pagination --}}

<div class="mt-4">

    {{ $users->links('pagination::bootstrap-5') }}

</div>
```

</div>

@endsection
