<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- HEADER -->
   <header class="nav">
        <div class="nav-left">
            <img src="{{ asset('img/logo/logo_kagoem.png') }}" class="logo-kagoem" alt="Kaia Logo">
            <img src="{{ asset('img/logo/Logo_baba[1].PNG') }}" class="logo-baba" alt="Baba Logo">
            <img src="{{ asset('img/logo/logo_Kaia.png') }}" class="logo-kaia" alt="Kaia Logo">
        </div>

        <nav class="nav-right">
            <a href="{{ url('/') }}"></a>
            <a href="{{ url('/wedding') }}">Wedding</a>
            <a href="{{ url('/lamaran') }}">Lamaran</a>
            <a href="{{ url('/team') }}">Team</a>
        </nav>
    </header>

   <section class="wedding-section">

    <div class="gallery-grid">

 <a href="{{ url('/wedding/golden') }}" class="card">
            <img src="{{ asset('img/BALLROOM/GOLDEN.jpg') }}" alt="">
            <p>Gedung Golden Sriwijaya</p>
        </a>

        <a href="{{ url('/wedding/atyasa') }}" class="card">
            <img src="{{ asset('img/BALLROOM/ATYASA.jpg') }}" alt="">
            <p>Gedung Atyasa</p>
        </a>

        <a href="{{ url('/wedding/taciro') }}" class="card">
            <img src="{{ asset('img/BALLROOM/TACIRO.jpg') }}" alt="">
            <p>Gedung Taciro</p>
        </a>

        <a href="{{ url('/wedding/thesultan') }}" class="card">
            <img src="{{ asset('img/BALLROOM/THE SULTAN.jpg') }}" alt="">
            <p>Gedung The Sultan</p>
        </a>

        <a href="{{ url('/wedding/soma') }}" class="card">
            <img src="{{ asset('img/BALLROOM/SOMA.jpg') }}" alt="">
            <p>Soma Grand Ballroom</p>
        </a>

        <a href="{{ url('/wedding/pusri') }}" class="card">
            <img src="{{ asset('img/BALLROOM/pursi.jpg') }}" alt="">
            <p>Pusri Grand Ballroom</p>
        </a>

        <a href="{{ url('/wedding/thezuri') }}" class="card">
            <img src="{{ asset('img/BALLROOM/THE ZURI.jpg') }}" alt="">
            <p>Gedung The Zuri</p>
        </a>

        <a href="{{ url('/wedding/al-azar') }}" class="card">
            <img src="{{ asset('img/BALLROOM/AL-AZHAR.jpg') }}" alt="">
            <p>Gedung Al azhar</p>
        </a>

        <a href="{{ url('/wedding/santika') }}" class="card">
            <img src="{{ asset('img/BALLROOM/SANTIKA.jpg') }}" alt="">
            <p>Gedung Santika</p>

        <a href="{{ url('/wedding/km7') }}" class="card">
            <img src="{{ asset('img/BALLROOM/KM7.jpg') }}" alt="">
            <p>Gedung KM 7</p>

</body>
</html>
