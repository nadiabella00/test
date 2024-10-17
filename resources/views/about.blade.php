@extends('layouts.app')

@section('content')

  <!-- Header Section -->
  <div class="header py-5" style="background-image: url('img/gambarrr.png'); width: 100%; height: 484px; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
  </div>

  <!-- Main Content -->
  <main class="main">

    <!-- Pendahuluan Section -->
    <section id="pendahuluan" class="section" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <img src="img/about1.png" alt="Car Wash" class="img-fluid" style="border-radius: 3px; max-width: 80%; height: auto;">
          </div>
          <div class="col-md-6">
            <h2 style="font-size: 1.8rem; font-weight: bold; margin-bottom: 15px;">Pendahuluan</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tujuan Kami Section -->
    <section id="tujuan-kami" class="section" data-aos="fade-up" data-aos-delay="200">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <h2 style="font-size: 1.8rem; font-weight: bold; margin-bottom: 15px;">Tujuan Kami</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="col-md-6">
            <img src="img/about2.png" alt="Car Wash" class="img-fluid" style="border-radius: 3px; max-width: 80%; height: auto;">
          </div>
        </div>
      </div>
    </section>

    <!-- Kelebihan Kami Section -->
    <section id="kelebihan-kami" class="section" data-aos="fade-up" data-aos-delay="300" style="margin-top: 50px;">
      <div class="container text-center">
        <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 20px;">Kelebihan Kami</h2>
        <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </section>

  </main>

@endsection
