@extends('layouts.app')

@section('content')
<div style="background-color: #ffffff;">
    <header class="py-5" style="background-image: url('img/homepage.jpg'); width: 1350px; height: 500px; background-position: center; background-size: cover;">
    </header>

    <p style="margin-top: 90px;">
        <strong><h2 style="text-align:center;">Cara Kerja Pemesanan</h2></strong> 
    </p>

    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="h4 fw-bolder" style="text-align: center;">Paket Standar</h2>
                        <p class="text-blue" style="text-align: center;">layanan yang paling populer dan banyak dipesan</p>
                        <p class="text-blue" style="text-align: center;"><strong>Rp80.000</strong></p>
                        <button class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;">Pilih Layanan</button>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="feature bg-gradient rounded-3 mb-3" style="text-color: #007bff; justify-content: center; display: flex; align-items: center; height: 100px;">
                                <i class="bi bi-file-text" style="font-size: 36px; color: #007bff; margin: 0 auto;"></i>
                            </div>
                            <h2 class="h4 fw-bolder" style="text-align: center;">Paket Deluxe</h2>
                            <p style="text-align: center;">paket special dengan pelayanan yg lengkap</p>
                            <p class="text-blue" style="text-align: center;"><strong>Rp120.000</strong></p>
                            <button class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;">Pilih Layanan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="feature bg-gradient rounded-3 mb-3" style="text-color: #007bff; justify-content: center; display: flex; align-items: center; height: 100px;">
                                <i class="bi bi-credit-card" style="font-size: 36px; color: #007bff; margin: 0 auto;"></i>
                            </div>
                            <h2 class="h4 fw-bolder" style="text-align: center;">Paket Express</h2>
                            <p style="text-align: center;">pencucian mobil yang singkat dan dan simple</p>
                            <p class="text-blue" style="text-align: center;"><strong>Rp50.000</strong></p>
                            <button class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;">Pilih Layanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
