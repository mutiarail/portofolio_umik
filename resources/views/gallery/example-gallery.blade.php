<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Gallery</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header class="nav">
        <div class="nav-left">
            <img src="{{ asset('img/logo/logo_kagoem.png') }}" class="logo-kagoem" alt="Kaia Logo">
            <img src="{{ asset('img/logo/Logo_baba[1].PNG') }}" class="logo-baba" alt="Baba Logo">
            <img src="{{ asset('img/logo/logo_Kaia.png') }}" class="logo-kaia" alt="Baba Logo">
        </div>
    </header>

    <div class="gallery">
        <img src="{{ asset('img/example-gallery/photo1.jpg') }}" alt="Photo 1">
        <img src="{{ asset('img/example-gallery/photo2.jpg') }}" alt="Photo 2">
        <img src="{{ asset('img/example-gallery/photo3.jpg') }}" alt="Photo 3">
        <img src="{{ asset('img/example-gallery/photo4.jpg') }}" alt="Photo 4">
        <img src="{{ asset('img/example-gallery/photo5.jpg') }}" alt="Photo 5">
    </div>
   
</body>
</html>
