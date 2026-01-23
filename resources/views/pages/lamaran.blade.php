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
        <img src="{{ asset('img/foto_Lamaran/Firhan&dina1.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

    <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/Mia&Firli1.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

    <!-- Bagian 3 -->
    <div class="section">
        <img src="{{ asset('img/foto_Lamaran/Firhan&dina1.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

    <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/Firhan&dina2.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

     <!-- Bagian 3 -->
    <div class="section">
        <img src="{{ asset('img/foto_Lamaran/Mia&Firli1.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

      <!-- Bagian 2 -->
    <div class="section reverse">
        <img src="{{ asset('img/foto_Lamaran/Mia&Firli2.jpg') }}" alt="foto">
        <p>
            Aku tidak menjanjikan hidup yang sempurna, tapi aku berjanji akan selalu berusaha 
            membahagiakanmu, menjagamu, dan mencintaimu dalam setiap keadaan. 
            Maukah kamu menjadi pendamping hidupku, berbagi hari, tawa, dan impian bersama selamanya
        </p>
    </div>

</div>
</body>
</html>
