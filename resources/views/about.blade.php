@extends('layouts.app')

@section('content')

  <!-- Header Section -->
  <div class="header py-5" style="background-image: url('img/gambarrr.png'); width: 100%; height: 484px; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center; text-align: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
    <h1 class="display-4">Welcome to VANA CARWASH</h1>
  </div>

  <!-- Main Content -->
  <main class="main my-5">

    <!-- Pendahuluan Section -->
    <section id="pendahuluan" class="section" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="font-weight-bold mb-4" style="font-size: 2rem;">Pendahuluan</h2>
            <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tujuan Kami Section -->
    <section id="tujuan-kami" class="section" data-aos="fade-up" data-aos-delay="200">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="font-weight-bold mb-4" style="font-size: 2rem;">Tujuan Kami</h2>
            <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Kelebihan Kami Section -->
    <section id="kelebihan-kami" class="section" data-aos="fade-up" data-aos-delay="300" style="margin-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="font-weight-bold mb-4" style="font-size: 2rem;">Kelebihan Kami</h2>
            <p class="mb-4" style="font-size: 1.2rem; line-height: 1.8;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

@endsection
