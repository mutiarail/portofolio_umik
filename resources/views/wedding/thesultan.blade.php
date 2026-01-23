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

        <a href="{{ url('/gallery/raka-and-monica') }}" class="card">
            <img src="{{ asset('img/foto_raka/27.jpg') }}" alt="">
            <p>Monica & Raka</p>
        </a>

        <a href="{{ url('/gallery/ara-and-farhan') }}" class="card">
            <img src="{{ asset('img/foto_ara/24.jpg') }}" alt="">
            <p>Ara & Farhan</p>
        </a>

        <a href="{{ url('/gallery/indira-and-nayaka') }}" class="card">
            <img src="{{ asset('img/foto_nayaka/43.png') }}" alt="">
            <p>Indira & Nayaka</p>
        </a>

     </div>
</body>
</html>
