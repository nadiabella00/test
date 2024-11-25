@extends('layouts.app')

@section('content')
    <div class="header py-5" style="background-image: url('img/gambarrr.png'); width: 100%; height: 484px; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
        <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 60px; white-space: nowrap;">Manage Completed Services</h2>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach($services as $service) <!-- Loop through each service -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-light rounded">
                        <!-- Display the service image -->
                        <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top img-thumbnail mx-auto d-block" alt="{{ $service->customer_name }} - {{ $service->service_name }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $service->customer_name }}</h5>
                            <p class="card-text">{{ $service->service_name }}</p>
                        </div>
                        <div class="card-footer bg-light">
                            <p class="card-text text-center" style="font-size: 1rem; color: #444; margin-top: 10px;">{{ $service->service_date }}</p>
                            <p class="card-text text-center" style="font-size: 1rem; color: #444; margin-top: 10px;">Status: {{ $service->status }}</p>

                            <!-- Cancel Booking Button -->
                            <form action="{{ route('admin.services.cancel', $service->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('PUT') <!-- Use PUT for status update -->
                                <button type="submit" class="btn btn-danger btn-sm">Cancel Booking</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
