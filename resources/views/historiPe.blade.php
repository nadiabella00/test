@extends('layouts.app')

@section('content')
    <div class="header py-5" style="background-image: url('img/gambarrr.png'); width: 100%; height: 484px; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
        <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 60px; white-space: nowrap;">Cek Bukti Pemesanan</h2>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/zayn.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="zayn malik - 01 juni 2024" style="width: 80px; height: 80px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Zayn Malik</h5>
                        <p class="card-text">01 Juni 2024</p>
                    </div>
                    <div class="card-footer">
                        <h5 class="card-title text-center">Komentar Pelanggan</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/DPR IAN LUV.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="christian yu - 17 agustus 2024" style="width: 80px; height: 80px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Christian Yu</h5>
                        <p class="card-text">17 Agustus 2024</p>
                    </div>
                    <div class="card-footer">
                        <h5 class="card-title text-center">Komentar Pelanggan</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/daniell.jpg" class="card-img-top img-thumbnail mx-auto d-block" alt="daniel caesar - 30 januari 2024" style="width: 80px; height: 80px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Daniel Caesar</h5>
                        <p class="card-text">30 Januari 2024</p>
                    </div>
                    <div class="card-footer">
                        <h5 class="card-title text-center">Komentar Pelanggan</h5>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
