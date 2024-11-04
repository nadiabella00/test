@extends('layouts.app')

@section('content')
    <div class="header py-5" style="background-image: url('img/gambarrr.png'); width: 100%; height: 484px; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
    </div>

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h5 class="mb-3">Upload Bukti Pemesanan</h5>
    <input type="text" name="nama" class="form-control mb-3" placeholder="Nama" required>
    <input type="text" name="tanggal_pemesanan" class="form-control mb-3" placeholder="Tanggal Pemesanan (e.g., 01 Juni 2024)" required>
    <textarea name="review" class="form-control mb-3" placeholder="Teks Review" rows="3" required></textarea>
    <input type="file" name="file" class="form-control mb-3" accept="image/*" required>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="img/zayn.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="zayn malik - 01 juni 2024" style="width: 80px; height: 80px;">
                    <div class="card-body">
                        <h5 class="card-title">Zayn Malik</h5>
                        <p class="card-text">01 Juni 2024</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">bugatti la voiture noire</p>
                        <button class="btn btn-primary">DONE</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="img/DPR IAN LUV.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="christian yu - 17 agustus 2024" style="width: 80px; height: 80px;">
                    <div class="card-body">
                        <h5 class="card-title">Christian Yu</h5>
                        <p class="card-text">17 Agustus 2024</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">porsche taycan</p>
                        <button class="btn btn-primary">DONE</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="img/daniell.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="daniel caesar - 30 januari 2024" style="width: 80px; height: 80px;">
                    <div class="card-body">
                        <h5 class="card-title">Daniel Caesar</h5>
                        <p class="card-text">30 Januari 2024</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">rolls royce phantom</p>
                        <button class="btn btn-primary">DONE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
