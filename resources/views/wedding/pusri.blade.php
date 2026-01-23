<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header class="nav">
        <div class="nav-left">
            <img src="{{ asset('img/logo/logo_kagoem.png') }}" class="logo-kagoem" alt="Kaia Logo">
            <img src="{{ asset('img/logo/Logo_baba[1].PNG') }}" class="logo-baba" alt="Baba Logo">
            <img src="{{ asset('img/logo/logo_Kaia.png') }}" class="logo-kaia" alt="Kaia Logo">
        </div>
    </header>

     <section class="wedding-section">

    <div class="gallery-grid">

        <a href="{{ url('/gallery/firhan-and-dina') }}" class="card">
            <img src="{{ asset('img/foto_dina/7.png') }}" alt="">
            <p>firhan & dina</p>
        </a>

         <a href="{{ url('/gallery/iren-and-wahyu') }}" class="card">
            <img src="{{ asset('img/foto_iren/aren-wahyu.png') }}" alt="">
            <p>Iren & Wahyu</p>
        </a>

        <a href="{{ url('/gallery/fitri-and-randi') }}" class="card">
            <img src="{{ asset('img/foto_randi/46.jpg') }}" alt="">
            <p>Fitri & Randi</p>
        </a>

        <a href="{{ url('/gallery/nora-and-rahmat') }}" class="card">
            <img src="{{ asset('img/foto_nora/47.png') }}" alt="">
            <p>Nora & Rahmat</p>
        </a>

        <a href="{{ url('/gallery/tiara-and-riski') }}" class="card">
            <img src="{{ asset('img/foto_tiara/45.png') }}" alt="">
            <p>Tiara & Riski</p>
        </a>

    </div>
</body>
</html>
