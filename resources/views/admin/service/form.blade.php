@extends('layouts.admin')

@section('content')
    <h1>{{ isset($package) ? 'Edit' : 'Tambah' }} Paket Layanan</h1>

    <form action="{{ isset($package) ? route('package.update', $package->id) : route('package.store') }}" method="POST">
        @csrf
        @if(isset($package))
            @method('PUT')
        @endif

        <label for="name">Nama Paket:</label>
        <input type="text" name="name" id="name" value="{{ $package->name ?? '' }}" required>

        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" value="{{ $package->price ?? '' }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required>{{ $package->description ?? '' }}</textarea>

        <button type="submit">{{ isset($package) ? 'Update' : 'Tambah' }}</button>
    </form>
@endsection