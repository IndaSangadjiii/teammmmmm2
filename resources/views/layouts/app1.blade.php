<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - VETZ Praktek Dokter Hewan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1 class="title"><img src="{{ asset('images/logo6.jpeg') }}" alt="Logo" class="logo2">VETZ PRAKTEK DOKTER HEWAN</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="{{ route('search') }}" class="{{ Route::currentRouteName() == 'search' ? 'active' : '' }}"><i class="fas fa-book-open"></i> Tentang Kami</a></li>
                    <li><a href="{{ route('account') }}" class="{{ Route::currentRouteName() == 'account' ? 'active' : '' }}"><i class="fas fa-stethoscope"></i> Fasilitas Pelayanan</a></li>
                    <li><a href="{{ route('notification') }}" class="{{ Route::currentRouteName() == 'notification' ? 'active' : '' }}"><i class="fas fa-question-circle"></i> Informasi</a></li>
                    <li><a href="{{ route('kontak') }}" class="{{ Route::currentRouteName() == 'kontak' ? 'active' : '' }}"><i class="fas fa-phone-alt"></i> Kontak Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Klinik Hewan Peliharaan. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
