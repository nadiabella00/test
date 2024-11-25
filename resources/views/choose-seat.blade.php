@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="mb-4">
        <label for="choose_bench" class="fw-bold text-secondary">Pilih Bangku</label>
        <div class="grid grid-cols-4 gap-2">
            @foreach ($seats as $seat)
                <button 
                    type="button" 
                    class="seat-btn bg-gray-200 p-2 rounded-lg hover:bg-gray-300 {{ $seat->is_reserved ? 'bg-red-500 text-white' : '' }}" 
                    data-seat="{{ $seat->seat_code }}"
                    {{ $seat->is_reserved ? 'disabled' : '' }}>
                    {{ $seat->seat_code }}
                </button>
            @endforeach
        </div>
    </div>

    <form action="{{ route('seats.reserve') }}" method="POST" id="reserve-form">
        @csrf
        <input type="hidden" name="seat_code" id="selected-seat">
        <div class="mb-4">
            <input type="submit" value="Pesan Tiket" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 cursor-pointer">
        </div>
    </form>
</div>

<script>
    // Handle seat selection
    document.querySelectorAll('.seat-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.seat-btn').forEach(btn => btn.classList.remove('bg-blue-300'));
            if (!this.disabled) {
                this.classList.add('bg-blue-300');
                document.getElementById('selected-seat').value = this.dataset.seat;
            }
        });
    });
</script>
@endsection
