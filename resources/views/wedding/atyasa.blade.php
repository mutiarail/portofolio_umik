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

        <a href="{{ url('/gallery/aurel-and-juanda') }}" class="card">
            <img src="{{ asset('img/foto_aurel/aure.jpg') }}" alt="">
            <p>Aurel & Juanda</p>
        </a>

        <a href="{{ url('/gallery/anisa-and-doni') }}" class="card">
            <img src="{{ asset('img/foto_anisa/anisa&doni.jpg') }}" alt="">
            <p>Anisa & Doni</p>
        </a>

        <a href="{{ url('/gallery/dinda-and-heri') }}" class="card">
            <img src="{{ asset('img/foto_Dinda/16.jpg') }}" alt="">
            <p>Dinda & Heri</p>
        </a>

        <a href="{{ url('/gallery/lingga-and-tigih') }}" class="card">
            <img src="{{ asset('img/foto_lingga/lingga&fiqih.jpg') }}" alt="">
            <p>Lingga & fiqih</p>
        </a>

        <a href="{{ url('/gallery/jefa-and-dayat') }}" class="card">
            <img src="{{ asset('img/foto_Dayat/17.jpg') }}" alt="">
            <p>Jefa & Dayat</p>
        </a>

        <a href="{{ url('/gallery/messy-and-aldi') }}" class="card">
            <img src="{{ asset('img/foto_messy/messy12.png') }}" alt="">
            <p>Messy & Aldi</p>
        </a>

         </div>
</body>
</html>
