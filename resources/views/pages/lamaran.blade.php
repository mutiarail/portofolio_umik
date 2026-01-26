<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
<div class="container">

    <!-- Bagian 1 -->
    <div class="section">
        <img src="{{ asset('img/foto_Lamaran/3.jpg') }}" alt="foto">
        <p>
            Jadikan pernikahan sebagai ladang ibadah, tempat belajar sabar, dan ruang untuk saling memperbaiki diri.
Semoga Allah selalu melimpahkan sakinah, mawaddah, dan rahmah dalam rumah tangga kalian.
    </div>

    <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/Mia&Firli1.jpg') }}" alt="foto">
        <p>
            Pernikahan adalah perjalanan panjang yang membutuhkan kesabaran, keikhlasan, dan saling pengertian. Jadikanlah cinta sebagai ibadah, komunikasi sebagai jembatan, dan keluarga sebagai tempat pulang yang penuh ketenangan.
        </p>
    </div>

    <!-- Bagian 3 -->
    <div class="section">
        <img src="{{ asset('img/foto_Lamaran/2.JPG') }}" alt="foto">
        <p>
            Dalam pernikahan, kebahagiaan dibangun dari hal-hal sederhana: saling mendengar, saling menghargai, dan saling menguatkan.
Semoga cinta yang tumbuh hari ini menjadi pondasi yang kokoh untuk masa depan.
        </p>
    </div>

    <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/7.jpg') }}" alt="foto">
        <p>
            Bangun rumah tangga dengan cinta, kepercayaan, dan doa.
Karena kebahagiaan sejati tumbuh dari kebersamaan yang tulus.
        </p>
    </div>

     <!-- Bagian 3 -->
    <div class="section">
        <img src="{{ asset('img/foto_Lamaran/4.jpg') }}" alt="foto">
        <p>
Pernikahan bukan hanya menyatukan dua insan, tetapi juga menyatukan dua keluarga.
Oleh karena itu, jagalah komitmen, hormati orang tua, dan peliharalah keharmonisan rumah tangga dengan penuh tanggung jawab dan kasih sayang.
        </p>
    </div>

      <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/Mia&Firli2.jpg') }}" alt="foto">
        <p>
Cinta bukan tentang kesempurnaan, tapi tentang kesediaan untuk saling melengkapi.
Semoga langkah yang dimulai hari ini menjadi doa yang terus tumbuh sepanjang waktu.
        </p>
    </div>

</div>
</body>
</html>
