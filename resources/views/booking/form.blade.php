@extends('layouts.app')

@section('content')

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f8f9fa;
        border-radius: 15px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    }

    .form-container {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }

    .form-data {
        flex: 1;
        padding: 25px;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
    }

    .package-details {
        flex: 1;
        padding: 25px;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
        color: #343a40;
    }

    p {
        text-align: center;
        font-size: 16px;
        margin-bottom: 25px;
        color: #6c757d;
    }

    .form-group {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group > div {
        flex: 1;
    }

    label {
        display: block;
        font-size: 15px;
        margin-bottom: 8px;
        font-weight: bold;
        color: #495057;
    }

    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        font-size: 15px;
    }

    input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .seat-selection {
        margin-top: 30px;
    }

    .seats {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
    }

    .seat {
        width: 60px;
        height: 60px;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 8px;
        text-align: center;
        line-height: 60px;
        cursor: pointer;
        font-weight: bold;
        font-size: 14px;
        transition: 0.2s;
    }

    .seat:hover {
        background-color: #007bff;
        color: #ffffff;
    }

    .btn {
        display: inline-block;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        background-color: #007bff;
        color: #ffffff;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: 0.2s;
        margin: 20px auto 0;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .text-center {
        text-align: center;
    }

    .seat.selected {
        background-color: #28a745;
        color: #ffffff;
        border-color: #218838;
    }
</style>

<div class="container mt-5">
    <div class="form-container">
        <!-- Form Input Data Diri -->
        <div class="form-data">
            <h2>Form Data Diri</h2>
            <p>Silahkan isi data diri Anda untuk melanjutkan proses booking!</p>

            <form action="{{ route('booking.store') }}" method="POST">
                @csrf
                <!-- Tambahkan input tersembunyi untuk ID paket -->
                <input type="hidden" name="package_id" value="{{ $package->id }}">

                <!-- Form Input lainnya -->
                <div class="form-group">
                    <div>
                        <label for="customer_name">Nama Lengkap</label>
                        <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div>
                        <label for="booking_date">Tanggal Booking</label>
                        <input type="date" name="booking_date" id="booking_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="booking_time">Waktu Booking</label>
                        <input type="time" name="booking_time" id="booking_time" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div>
                        <label for="number_of_passengers">Jumlah Penumpang</label>
                        <input type="number" name="number_of_passengers" id="number_of_passengers" class="form-control" min="1" required>
                    </div>
                </div>

                <!-- Seat Selection -->
                <div class="seat-selection">
                    <h4 class="text-center">Pilih Bangku</h4>
                    <div class="seats">
                        @foreach(['1A', '1B', '1C', '1D', '2A', '2B', '2C', '2D', '3A', '3B', '3C', '3D', '4A', '4B', '4C', '4D'] as $seat)
                            <button type="button" class="seat" data-seat="{{ $seat }}">{{ $seat }}</button>
                        @endforeach
                    </div>
                    <input type="hidden" name="choose_bench" id="choose_bench" value="">
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn">Lanjutkan</button>
                </div>
            </form>
        </div>

      

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const seats = document.querySelectorAll('.seat');
        const selectedSeatsInput = document.getElementById('choose_bench');
        let selectedSeats = [];

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                const seatNumber = seat.getAttribute('data-seat');

                // Toggle kelas 'selected' dan tambahkan/hapus bangku dari array
                if (seat.classList.contains('selected')) {
                    seat.classList.remove('selected');
                    selectedSeats = selectedSeats.filter(s => s !== seatNumber);
                } else {
                    seat.classList.add('selected');
                    selectedSeats.push(seatNumber);
                }

                // Update nilai input tersembunyi
                selectedSeatsInput.value = selectedSeats.join(',');
            });
        });
    });
</script>

@endsection
