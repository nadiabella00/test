@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <header class="py-5" style="background-image: url('img/homepage.jpg'); background-size: cover; background-position: center; height: 60vh;">
        <div class="container px-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                    <h6 class="fw-bolder mb-2" style="font-size: 12px; color: yellow; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">Kapanpun Dimanapun</h6>
                    <h2 class="display-4" style="color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">Pesan Sekarang Juga!!</h2>
                    <a class="btn btn-lg px-4 rounded-0 mt-4" style="background-color: khaki; color: #333; font-weight: bold;" href="#">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 text-center">
        <h2><strong>Cara Kerja Pemesanan</strong></h2>
    </section>

    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature bg-gradient rounded-3 mb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                                <i class="bi bi-hand-index" style="font-size: 36px; color: #007bff;"></i>
                            </div>
                            <h2 class="h4 fw-bolder">Langkah 1</h2>
                            <p>Pilihan Layanan yang Anda Butuhkan!</p>
                            <p>Dari layanan pencucian Express, Standar, deluxe kami memiliki layanan yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature bg-gradient rounded-3 mb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                                <i class="bi bi-file-text" style="font-size: 36px; color: #007bff;"></i>
                            </div>
                            <h2 class="h4 fw-bolder">Langkah 2</h2>
                            <p>Isi data diri dan lakukan pembayaran</p>
                            <p>Dari layanan pencucian Express, Standar, deluxe kami memiliki layanan yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature bg-gradient rounded-3 mb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                                <i class="bi bi-credit-card" style="font-size: 36px; color: #007bff;"></i>
                            </div>
                            <h2 class="h4 fw-bolder">Langkah 3</h2>
                            <p>Pemesanan Selesai</p>
                            <p>Pemesanan selesai dan siap untuk diproses.</p>
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
                <div class="col-md-12">
                    <img src="img/mobil.png" alt="Mobil Orange" class="img-fluid mb-4" style="max-width: 80%; height: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-6">
                    <p><i class="bi bi-speedometer" style="color: #007bff;"></i> Cepat Tanpa Repot Antri</p>
                </div>
                <div class="col-md-2 col-6">
                    <p><i class="bi bi-person-check" style="color: #007bff;"></i> Bebas Atur Jadwal</p>
                </div>
                <div class="col-md-2 col-6">
                    <p><i class="bi bi-briefcase" style="color: #007bff;"></i> Profesional dan Cepat Tanggap</p>
                </div>
                <div class="col-md-2 col-6">
                    <p><i class="bi bi-shield-lock" style="color: #007bff;"></i> Keamanan Mobil Terjaga</p>
                </div>
                <div class="col-md-2 col-6">
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
