<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Perawatan Kesehatan Holistik</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1 class="title"><img src="{{ asset('images/logo3.jpeg') }}" alt="Logo" class="logo2">VETZ PRAKTEK DOKTER HEWAN </h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="{{ route('search') }}" class="{{ Route::currentRouteName() == 'search' ? 'active' : '' }}"><i class="fas fa-book-open"></i> Tentang Kami</a></li>
                    <li><a href="{{ route('account') }}" class="{{ Route::currentRouteName() == 'account' ? 'active' : '' }}"><i class="fas fa-stethoscope"></i> Fasilitas Pelayanan</a></li>
                    <li><a href="{{ route('notification') }}" class="{{ Route::currentRouteName() == 'notification' ? 'active' : '' }}"><i class="fas fa-question-circle"></i> Informasi</a></li>
                    <li><a href="{{ route('kontak') }}" class="{{ Route::currentRouteName() == 'kontak' ? 'active' : '' }}"><i class="fas fa-phone-alt"></i> Kontak Kami</a></li>
                </ul>
            </nav>
         
            <div class="indicator">
                <span class="dot" id="dot-1"></span>
                <span class="dot" id="dot-2"></span>
                <span class="dot" id="dot-3"></span>
            </div>
            <div class="banner-container">
                <div class="banner-image" id="banner-image-1"></div>
                <div class="banner-image" id="banner-image-2"></div>
                <div class="banner-image" id="banner-image-3"></div>
            </div>
        </div>
    </header>
    <main>
        <section class="services">
            
          
            
        </section>
        @yield('content')
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Klinik Hewan Peliharaan. Semua Hak Dilindungi.</p>
         
        </div>
    </footer>

    <script>
        const images = [
            '{{ asset("images/tai.jpg") }}',
            '{{ asset("images/tai2.jpg") }}',
            '{{ asset("images/klinik22.jpg") }}'
        ];
        let currentIndex = 0;

        function changeBackground() {
            document.querySelectorAll('.banner-image').forEach((image, index) => {
                image.style.opacity = (index === currentIndex) ? 1 : 0;
            });
            document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
            document.getElementById(`dot-${currentIndex + 1}`).classList.add('active');
            currentIndex = (currentIndex + 1) % images.length;
        }

        function setImages() {
            document.querySelectorAll('.banner-image').forEach((image, index) => {
                image.style.backgroundImage = `url(${images[index]})`;
            });
        }

        setImages();
        setInterval(changeBackground, 5000);
        changeBackground(); // Initial call
    </script>
</body>
</html>
