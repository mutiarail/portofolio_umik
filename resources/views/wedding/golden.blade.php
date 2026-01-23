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

        <a href="{{ url('/gallery/mia-and-firli') }}" class="card">
            <img src="{{ asset('img/foto_Mia/8.png') }}" alt="">
            <p>Mia & Firli</p>
        </a>

        <a href="{{ url('/gallery/chika-and-arif') }}" class="card">
            <img src="{{ asset('img/foto_chika/10.png') }}" alt="">
            <p>Chika & Arif</p>
        </a>
        <a href="{{ url('/gallery/lisbet-and-arie') }}" class="card">
            <img src="{{ asset('img/foto_Lisbet/15.jpg') }}" alt="">
            <p>Lisbet & Arif</p>
        </a>

        <a href="{{ url('/gallery/dhiya-and-rapi') }}" class="card">
            <img src="{{ asset('img/foto_dhiya/Dhiya&rapi.jpg') }}" alt="">
            <p>Dhiya & Rapi</p>
        </a>

        <a href="{{ url('/gallery/monica-and-tomi') }}" class="card">
            <img src="{{ asset('img/foto_monica/monica&tomi.jpg') }}" alt="">
            <p>Monica & Tomi</p>
        </a>

        <a href="{{ url('/gallery/bagas-and-zafira') }}" class="card">
            <img src="{{ asset('img/foto_Bagas/zafira&bagas.jpg') }}" alt="">
            <p>Zafira & Bagas</p>
        </a>

        <a href="{{ url('/gallery/adelia-and-shobir') }}" class="card">
            <img src="{{ asset('img/foto_shobir/adelina-shobir.png') }}" alt="">
            <p>Adelia & Shobir</p>
        </a>
 </div>
</body>
</html>
