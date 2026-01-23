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

   <main class="team-page-content">
    <section class="team-hero">
        <h2 class="section-title">
            Meet the good <span role="img" aria-label="emoji-chef"></span> team behind the <span class="baba-highlight">BaBa</span> family
        </h2>

       <div class="team-photo-container">
    <img src="{{ asset('LXY26604.JPG') }}" alt="Foto Tim">
</div>


        <p class="team-philosophy">
            Sebuah tim hebat bukan terbentuk dari orang-orang sempurna, tetapi dari orang-orang yang saling melengkapi. Kita mungkin memiliki perbedaan cara berpikir dan bekerja, namun justru itulah yang membuat kita menjadi lebih kreatif dan tangguh. Dengan tujuan yang sama, kita dapat mencapai hasil yang lebih besar daripada apa yang bisa dicapai oleh seorang individu.
        </p>
    </section>

    <section class="founders-section">
        <div class="founder-card founder">
            <img src="{{ asset('img/anggota/Baba.png') }}" alt="Founder" class="founder-photo">
            <a href="https://www.instagram.com/baba.wira" target="_blank" class="name-link"><p class="name">Baba Wira</p></a>
            <p class="role">Founder</p>
        </div>

        <div class="founder-card owner">
            <img src="{{ asset('img/anggota/umi.png') }}" alt="Owner" class="founder-photo">
            <a href="https://www.instagram.com/fitrianaramadini" target="_blank" class="name-link"><p class="name">Umi Aci</p></a>
            <p class="role">Owner</p>
        </div>

    <div class="founder-card founder">
        <img src="{{ asset('img/anggota/mia.png') }}" alt="Founder" class="founder-photo">
        <a href="https://www.instagram.com/mirandarmdh" target="_blank" class="name-link"><p class="name">Mia</p></a>
        <p class="role">HR keluarga BaBa</p>
    </div>
</section>


   <section class="member-grid">

    <div class="member-card">
        <img src="{{ asset('img/anggota/nabilah.png') }}" alt="nabilah" class="member-photo">
        <a href="https://www.instagram.com/nabilahfebiyanti" target="_blank" class="name-link"><p class="name">nabilah</p></a>
        <p class="role">Wedding Assistant</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/verenanda.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/vrnanda_" target="_blank" class="name-link"><p class="name">Verenanda</p></a>
        <p class="role">Wedding Assistant</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/sarah.png') }}" alt="sarah" class="member-photo">
        <a href="https://www.instagram.com/aisyhsarah" target="_blank" class="name-link"><p class="name">Sarah</p></a>
        <p class="role">Wedding Assistant</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/kaknagieb.jpg') }}" alt="Nagieb" class="member-photo">
         <a href="https://www.instagram.com/nagiebsyhb" target="_blank" class="name-link"><p class="name">Nagieb</p></a>
        <p class="role">Socmed Specialist</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/yaya.png') }}" alt="Firli" class="member-photo">
        <a href="https://www.instagram.com/firlisamdora" target="_blank" class="name-link"><p class="name">Firli</p></a>
        <p class="role">project Manager</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/Thoha.png') }}" alt="Thoha" class="member-photo">
        <a href="https://www.instagram.com/thoharianss" target="_blank" class="name-link"><p class="name">Thoha</p></a>
        <p class="role">project Manager</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/yaser.png') }}" alt="yaser" class="member-photo">
        <a href="https://www.instagram.com/yassermuhammad_" target="_blank" class="name-link"><p class="name">Yasser</p></a>
        <p class="role">project Manager</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/rizki.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/riskialfn" target="_blank" class="name-link"><p class="name">Rizki</p></a>
        <p class="role">project Manager</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/Toti.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/adestianandita" target="_blank" class="name-link"><p class="name">Toty</p></a>
        <p class="role">project Manager</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/annisa.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/annisaputrilss" target="_blank" class="name-link"><p class="name">Annisa pl</p></a>
        <p class="role">Personal Asisstent</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/Farah.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/farah_fitrii" target="_blank" class="name-link"><p class="name">Farah</p></a>
        <p class="role">Personal Asisstent</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/Najmi.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/najmimaura" target="_blank" class="name-link"><p class="name">Najmi</p></a>
        <p class="role">Tim fitting</p>
    </div>
    <div class="member-card">
    <img src="{{ asset('img/anggota/disha.png') }}" alt="Rizki" class="member-photo">
   <a href="https://www.instagram.com/dishayunita" target="_blank" class="name-link"><p class="name">Disha</p></a>
    <p class="role">Tim Fitting</p>
</div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/Atia.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/athia_wilma" target="_blank" class="name-link"><p class="name">athia</p></a>
        <p class="role">Tim Fitting</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('img/anggota/arias.png') }}" alt="Rizki" class="member-photo">
        <a href="https://www.instagram.com/ariasptriamlh" target="_blank" class="name-link"><p class="name">arias</p></a>
        <p class="role">Tim Konten</p>
    </div>
   
</section>
<h2 class="title">HISTORY<br><span>TEAM <b>BaBa</b></span></h2>

<div class="wrapper">

    <!-- Bagian 1 -->
    <div class="section">
        <div class="text">
            <h3>Meet the good</h3>
            <p>Foto kebersamaan BaBa Word 2024</p>
        </div>

        <div class="scroll-box">
            <img src="{{ asset('img/baba Word 2025/poto2.jpeg') }}" alt="foto">
            <img src="{{ asset('img/baba Word 2025/poto1.jpeg') }}" alt="foto">
            <img src="{{ asset('img/baba Word 2025/poto3.jpeg') }}" alt="foto">
            <img src="{{ asset('img/baba Word 2025/poto4.jpeg') }}" alt="foto">
            <img src="{{ asset('img/baba Word 2025/poto5.jpeg') }}" alt="foto">
            <img src="{{ asset('img/baba Word 2025/poto6.jpeg') }}" alt="foto">
          

        </div>
    </div>

    <!-- Bagian 2 -->
    <div class="section">
        <div class="text">
            <h3>Meet the good</h3>
            <p>Foto kebersamaan BaBa Word 2025</p>
        </div>

        <div class="scroll-box">
            <img src="{{ asset('img/baba Word 2025/poto1') }}" alt="foto">
            <img src="{{ asset('team/2.JPG') }}" alt="foto">
            <img src="{{ asset('team/3.JPG') }}" alt="foto">
            <img src="{{ asset('team/4.JPG') }}" alt="foto">
            <img src="{{ asset('team/5.JPG') }}" alt="foto">
            <img src="{{ asset('team/6.JPG') }}" alt="foto">
            <img src="{{ asset('team/7.JPG') }}" alt="foto">
            <img src="{{ asset('team/8.JPG') }}" alt="foto">
        </div>
    </div>
</div>  

<footer class="main-footer">
    <div class="footer-container">
       <div class="footer-section address">
    <h3>📍 Alamat Kami</h3>
    <a href="https://share.google/SFBb1GSD90wPiR0wV" target="_blank" aria-label="Lihat Alamat Kami di Google Maps">
        <p>Jl. Contoh Utama No. 123, Kota Fiktif, 12345</p>
        <p>Indonesia</p>
    </a>
</div>
        <div class="footer-section social-contact">
            <h3>📞 Hubungi Kami</h3>
            <ul>
                <li><a href="https://wa.me/628123456789" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp: +62 812-3456-789</a></li>
                <li><a href="https://instagram.com/keluarga.baba" target="_blank">
                    <i class="fab fa-instagram"></i> Instagram: @keluarga.baba</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
