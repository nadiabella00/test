@extends('layouts.app')

@section('content')
    <h1>Form Booking</h1>

    <form action="/booking" method="POST">
        @csrf
        <label for="package_id">Pilih Paket:</label>
        <select name="package_id" id="package_id" required>
            @foreach($packages as $package)
                <option value="{{ $package->id }}">{{ $package->name }}</option>
            @endforeach
        </select>

        <h2>Data Diri</h2>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>

        <label for="phone">No. HP:</label>
        <input type="tel" name="phone" id="phone" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Booking</button>
    </form>
@endsection