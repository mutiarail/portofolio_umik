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

        <a href="{{ url('/gallery/desti-and-ramar') }}" class="card">
            <img src="{{ asset('img/foto_desti/9.png') }}" alt="">
            <p>Desti & Damar</p>
        </a>

        <a href="{{ url('/gallery/rere-and-salman') }}" class="card">
            <img src="{{ asset('img/foto_salma/23.jpg') }}" alt="">
            <p>Rere & Salman</p>
        </a>

         </div>
</body>
</html>
