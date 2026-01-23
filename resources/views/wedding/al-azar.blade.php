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

         <a href="{{ url('/gallery/nisa-and-johanes') }}" class="card">
            <img src="{{ asset('img/foto_johanes/29.jpg') }}" alt="">
            <p>Nisa & dr.johanes</p>
        </a>

        <a href="{{ url('/gallery/mely-and-dina') }}" class="card">
            <img src="{{ asset('img/foto_mely/mely&deni.jpg') }}" alt="">
            <p>Mely & Dina</p>
        </a>

        <a href="{{ url('/gallery/nebo-and-lika') }}" class="card">
            <img src="{{ asset('img/foto_nebo/41.png') }}" alt="">
            <p>Nebo & Lika</p>
        </a>
 </div>
</body>
</html>
