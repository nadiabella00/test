@extends('layouts.admin')

@section('content')
    <h1>Pengelolaan Paket Layanan</h1>
    <a href="{{ route('packages.create') }}">Tambah Paket</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $index => $package)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $package->name }}</td>
                    <td>Rp {{ number_format($package->price, 2, ',', '.') }}</td>
                    <td>{{ $package->description }}</td>
                    <td>
                        <a href="{{ route('packages.edit', $package->id) }}">Edit</a>
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection