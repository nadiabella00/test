@extends('layouts.app')

@section('content')
<div>
    <header class="py-5" style="background-image: url('img/gambarrr.png'); background-size: cover; background-position: center;">
    </header>

    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <!-- Paket Standar -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="h4 fw-bolder text-center">Paket Standar</h2>
                            <p class="text-blue text-center">Untuk mobil yang memerlukan sedikit perhatian lebih</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Bilas bertekanan tinggi untuk menghilangkan kotoran membandel</li>
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Pencucian seluruh bagian luar menggunakan sarung tangan/spons berkualitas & sampo</li>
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Proses pencucian roda untuk menghilangkan kotoran & debu rem hingga bersih berkilau</li>
                                <!-- List items... -->
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Paket Premium -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="h4 fw-bolder text-center">Paket Premium</h2>
                            <p class="text-blue text-center">Untuk mobil yang memerlukan perhatian lebih</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Bilas bertekanan tinggi untuk menghilangkan kotoran membandel</li>
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Pencucian seluruh bagian luar menggunakan sarung tangan/spons berkualitas & sampo dengan pH netral</li>
                                <!-- List items... -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket Kilat -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="h4 fw-bolder text-center">Paket Kilat</h2>
                            <p class="text-blue text-center">Tingkat pemula, hanya bagian luar yang bersih</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Bilas bertekanan tinggi untuk menghilangkan kotoran membandel</li>
                                <li class="list-group-item"><i class="bi bi-check-circle-fill"></i> Pencucian seluruh bagian luar menggunakan sarung tangan/spons berkualitas & sampo</li>
                                <!-- List items... -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ... -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script> 
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
