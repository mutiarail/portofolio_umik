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

         <a href="{{ url('/gallery/aulia-and-ais') }}" class="card">
            <img src="{{ asset('img/foto_ais/11.png') }}" alt="">
            <p>Aulia & Ais</p>
        </a>

        <a href="{{ url('/gallery/bella-and-farhan') }}" class="card">
            <img src="{{ asset('img/foto_Bella/46.jpg') }}" alt="">
            <p>Bella & farhan</p>
        </a>

        </div>
</body>
</html>
