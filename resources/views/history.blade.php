<html lang="en">
<head>
    <title>Riwayat Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Riwayat Booking</h2>

        @if($bookings->isEmpty())
            <p class="text-center">Anda belum memiliki riwayat booking.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Tanggal Booking</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $index => $booking)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $booking->customer_name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
