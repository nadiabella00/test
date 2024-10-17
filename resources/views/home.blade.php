@extends('layouts.app')

@section('content')
<div style="background-color: #ffffff;">
    <header class="py-5" style="background-image: url('img/homepage.jpg'); width: 1350px; height: 500px; background-position: center; background-size: cover;">
        <div class="container px-5">
            <div class="justify-content-center">
                <div>
                    <h6 class="fw-bolder mb-2 text-center my-5" style="font-size: 12px; color: #c0d9ff;">Kapanpun Dimanapun</h6>
                    <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 60px; color: #ffffff; white-space: nowrap; text-align: center; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
                         Pesan Sekarang Juga!!
                    </h2>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-lg px-4 me-sm-3 rounded-0" style="background-color: khaki; color: #333; opacity: 90%; font-weight: bold;" href="#">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="feature bg-gradient rounded-3 mb-3" style="text-color: #007bff; display: flex; align-items: center; height: 100px; justify-content: center;">
                                <i class="bi bi-hand-index" style="font-size: 36px; color: #007bff;"></i>
                            </div>
                            <h2 class="h4 fw-bolder" style="text-align: center;">Langkah 1</h2>
                            <p class="text-blue" style="text-align: center;">Pilihan Layanan yang Anda Butuhkan!</p>
                            <p class="text-blue" style="text-align: center;">Dari layanan pencucian Express, Standar, deluxe kami memiliki layanan yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="feature bg-gradient rounded-3 mb-3" style="text-color: #007bff; justify-content: center; display: flex; align-items: center; height: 100px;">
                                <i class="bi bi-file-text" style="font-size: 36px; color: #007bff; margin: 0 auto;"></i>
                            </div>
                            <h2 class="h4 fw-bolder" style="text-align: center;">Langkah 2</h2>
                            <p style="text-align: center;">Isi data diri dan lakukan pembayaran</p>
                            <p class="text-blue" style="text-align: center;">Dari layanan pencucian Express, Standar, deluxe kami memiliki layanan yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="feature bg-gradient rounded-3 mb-3" style="text-color: #007bff; justify-content: center; display: flex; align-items: center; height: 100px;">
                                <i class="bi bi-credit-card" style="font-size: 36px; color: #007bff; margin: 0 auto;"></i>
                            </div>
                            <h2 class="h4 fw-bolder" style="text-align: center;">Langkah 3</h2>
                            <p style="text-align: center;">Pemesanan Selesai</p>
                            <p class="text-blue" style="text-align: center;">Pemesanan selesai dan siap untuk diproses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars Section -->
    <section class="py-5" id="cars">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="img/mobil.png" alt="Mobil Orange" style="width: 500px; margin-right: 20px;">
                </div>
            <div class="row mt-4">
                <div class="col">
                    <p><i class="bi bi-speedometer" style="color: #007bff;"></i> Cepat Tanpa Repot Antri</p>
                </div>
                <div class="col">
                    <p><i class="bi bi-person-check" style="color: #007bff;"></i> Bebas Atur Jadwal</p>
                </div>
                <div class="col">
                    <p><i class="bi bi-briefcase" style="color: #007bff;"></i> Profesional dan Cepat Tanggap</p>
                </div>
                <div class="col">
                    <p><i class="bi bi-shield-lock" style="color: #007bff;"></i> Keamanan Mobil Terjaga</p>
                </div>
                <div class="col">
                    <p><i class="bi bi-gear" style="color: #007bff;"></i> Garansi Cuci Kembali</p>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
