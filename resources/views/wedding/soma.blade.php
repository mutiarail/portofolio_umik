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

         <a href="{{ url('/gallery/fira-and-rizki') }}" class="card">
            <img src="{{ asset('img/foto_fira/vira&rizki.jpg') }}" alt="">
            <p>Fira & Rizki</p>
        </a>

        <a href="{{ url('/gallery/naura-and-heri') }}" class="card">
            <img src="{{ asset('img/foto_naura/20.jpg') }}" alt="">
            <p>Naura & Heri</p>
        </a>

        <a href="{{ url('/gallery/refo-and-fadillah') }}" class="card">
            <img src="{{ asset('img/foto_refo/4.jpg') }}" alt="">
            <p>Refo & Fadillah</p>
        </a>

        <a href="{{ url('/gallery/anggun-and-alno') }}" class="card">
            <img src="{{ asset('img/foto anggun/42.png') }}" alt="">
            <p>Anggun & Alno</p>
        </a>

        <a href="{{ url('/gallery/rizki-and-tania') }}" class="card">
            <img src="{{ asset('img/foto_tania/44.png') }}" alt="">
            <p>Rizki & Tania</p>
        </a>
 </div>
</body>
</html>
