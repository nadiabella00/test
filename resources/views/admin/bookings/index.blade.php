@extends('layouts.admin')

@section('content')
    <h1>Pengelolaan Pemesanan</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Paket</th>
                <th>Nomor Resi</th>
                <th>Tanggal Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $index => $booking)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $booking->customer->name }}</td>
                    <td>{{ $booking->package->name }}</td>
                    <td>{{ $booking->receipt_number }}</td>
                    <td>{{ $booking->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
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