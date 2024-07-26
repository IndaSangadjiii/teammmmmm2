<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Klinik Hewan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="home-body">

    @extends('layouts.app')

    @section('title', 'Beranda')
    @section('content')

    
    
    {{-- <div class="banner-container">
        <img src="{{ asset('images/anjing13.jpg') }}" alt="Banner 1" class="banner-image active">
        <img src="{{ asset('images/gambar2.jpg') }}" alt="Banner 2" class="banner-image">
        <img src="{{ asset('images/gambar3.jpg') }}" alt="Banner 3" class="banner-image">
        <img src="{{ asset('images/gambar4.jpg') }}" alt="Banner 4" class="banner-image">
        <img src="{{ asset('images/gambar5.jpg') }}" alt="Banner 5" class="banner-image">
        <img src="{{ asset('images/gambar6.jpg') }}" alt="Banner 6" class="banner-image">
        <img src="{{ asset('images/gambar7.jpg') }}" alt="Banner 7" class="banner-image">
        <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
    </div> --}}
    <H1> </H1>
    {{-- <section class="offers">
        <h2>Jadwal dokter</h2>
        <p>Jadwal dokter menunjukkan kapan dokter tersedia untuk konsultasi atau operasi, mencakup hari, jam, dan lokasi praktik.</p>
        <a href="{{ route('jadwal.dokter') }}" class="detail-link">Lihat Jadwal</a>
    </section>  --}}

    {{-- <section class="appointments">
        <h2>Buat Janji Temu</h2>
        <p>Ingin membuat janji temu dengan dokter kami? Klik tombol di bawah ini untuk mengatur janji temu.</p>
        <a href="{{ route('appointment.create') }}" class="detail-link">Buat Janji Temu</a>
    </section> --}}
    
    <section class="recommendations">

{{-- <i class="fas fa-home"></i> (Home)
<i class="fas fa-building"></i> (Building)
<i class="fas fa-bed"></i> (Bed)
<i class="fas fa-door-open"></i> (Open Door)
<i class="fas fa-door-closed"></i> (Closed Door)
<i class="fas fa-couch"></i> (Couch)
<i class="fas fa-bath"></i> (Bath)
<i class="fas fa-sink"></i> (Sink)
<i class="fas fa-shower"></i> (Shower)
<i class="fas fa-toilet"></i> (Toilet)
<i class="fas fa-tv"></i> (TV)
<i class="fas fa-fireplace"></i> (Fireplace)
<i class="fas fa-kitchen"></i> (Kitchen)
<i class="fas fa-blender"></i> (Blender)
<i class="fas fa-warehouse"></i> (Warehouse)
<i class="fas fa-tools"></i> (Tools)
<i class="fas fa-key"></i> (Key)
<i class="fas fa-wrench"></i> (Wrench)
<i class="fas fa-stairs"></i> (Stairs)
<i class="fas fa-elevator"></i> (Elevator)
<i class="fas fa-igloo"></i> (Igloo) --}}
    <div class="contact-info">
      
    </div>



            <section class="gallery-section1">
                <h3 class="gallery-heading1">Foto Klinik</h3>
                <h1 class="gallery-text1"> &nbsp;&nbsp;Jenis Ruangan :</h1>
                <div class="gallery1">
                    <div class="gallery-item1">
                        <div class="card1">
                            <img src="{{ asset('images/admin1.JPG') }}" alt="Foto 1" class="gallery-image1">
                            <div class="text-container1">
                                <h3>RUANGAN ADMINISTRASI <i class="fas fa-stethoscope"></i></h3>
                                <p>
                                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Ruangan administrasi di klinik hewan adalah pusat operasional di mana berbagai aktivitas administratif dan manajerial dilakukan untuk memastikan klinik berjalan dengan efisien. Ruangan ini biasanya terletak di area yang strategis agar mudah diakses oleh staf klinik dan tamu yang membutuhkan layanan administrasi. Berikut adalah beberapa fitur dan fungsi utama dari ruangan administrasi di klinik hewan:<br><br>
                                    
                                    <div class="sub-sections">
                                        <span class="sub-section">1. Penyambutan dan Pendaftaran Pasien:</span><br>
                                        <span class="sub-section-text">Di bagian depan ruangan administrasi terdapat area penerimaan tamu di mana para pemilik hewan peliharaan dapat mendaftar dan menyampaikan keluhan atau kebutuhan mereka. Meja resepsionis biasanya dilengkapi dengan komputer dan telepon untuk mengelola jadwal janji temu dan menjawab pertanyaan dari pemilik hewan.</span><br><br>
                                        
                                        <span class="sub-section">2. Manajemen Rekam Medis:</span><br>
                                        <span class="sub-section-text">Ruangan ini juga digunakan untuk menyimpan dan mengelola rekam medis hewan peliharaan. Sistem komputerisasi digunakan untuk memastikan semua data medis terekam dengan baik dan mudah diakses saat dibutuhkan.</span><br><br>
                                        
                                        <span class="sub-section">3. Penjadwalan Janji Temu:</span><br>
                                        <span class="sub-section-text">Penjadwalan janji temu antara dokter hewan dan pasien diatur di sini. Staf administrasi bertanggung jawab untuk mengatur jadwal agar berjalan lancar dan memastikan tidak ada tumpang tindih janji temu.</span><br><br>
                                        
                                        <span class="sub-section">4. Pengelolaan Keuangan:</span><br>
                                        <span class="sub-section-text">Berbagai aktivitas keuangan, seperti pembayaran biaya konsultasi, perawatan, dan pembelian obat, dilakukan di ruangan ini. Tersedia sistem kasir dan perangkat lunak akuntansi untuk mengelola transaksi keuangan dengan efisien.</span><br><br>
                                        
                                        <span class="sub-section">5. Komunikasi Internal dan Eksternal:</span><br>
                                        <span class="sub-section-text">Ruangan administrasi juga menjadi pusat komunikasi internal antara staf klinik, serta komunikasi eksternal dengan pemilik hewan peliharaan dan pemasok. Telepon, email, dan perangkat komunikasi lainnya digunakan untuk memastikan komunikasi yang efektif.</span><br><br>
                                        
                                        <span class="sub-section">6. Penyimpanan Dokumen:</span><br>
                                        <span class="sub-section-text">Selain rekam medis, ruangan ini juga digunakan untuk menyimpan berbagai dokumen administratif seperti laporan keuangan, dokumen legal, dan catatan inventaris. Lemari arsip dan sistem penyimpanan digital digunakan untuk menjaga keamanan dan kerahasiaan dokumen.</span><br><br>
                                        
                                        <span class="sub-section">7. Ruang Kerja Staf Administrasi:</span><br>
                                        <span class="sub-section-text">Ruangan ini dilengkapi dengan meja dan kursi kerja untuk staf administrasi. Komputer, printer, dan alat tulis kantor lainnya tersedia untuk mendukung pekerjaan mereka.</span><br><br>
                                        
                                        <span class="sub-section">8. Fasilitas Penunjang:</span><br>
                                        <span class="sub-section-text">Ruangan administrasi juga dilengkapi dengan fasilitas penunjang seperti pendingin ruangan, dispenser air, dan ruang tunggu yang nyaman bagi pemilik hewan peliharaan yang menunggu giliran.</span><br><br>
                                    </div>          </p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item1">
                        <div class="card1">
                            <img src="{{ asset('images/perawatan1.jpg') }}" alt="Foto 2" class="gallery-image1">
                            <div class="text-container1">
                                <h3>RUANGAN PERAWATAN <i class="fas fa-pills"></i></h3>
                                <p>
                                    Ruangan perawatan di klinik hewan adalah tempat hewan peliharaan mendapatkan perawatan medis. Ruangan ini dirancang khusus untuk memastikan hewan mendapatkan perawatan terbaik. Berikut adalah beberapa fitur utamanya:<br><br>
                                    
                                    Meja Perawatan:<br>
                                    Meja yang kuat dan bisa disesuaikan ketinggiannya untuk memudahkan pemeriksaan.<br><br>
                                    
                                    Peralatan Medis:<br>
                                    Tersedia peralatan medis seperti stetoskop, termometer, mesin ultrasonografi, dan alat diagnostik lainnya.<br><br>
                                    
                                    Obat-obatan:<br>
                                    Lemari obat yang terorganisir dengan baik menyimpan berbagai obat, vaksin, dan suplemen.<br><br>
                                    
                                    Area Steril:<br>
                                    Area khusus untuk prosedur bedah minor dengan peralatan steril.<br><br>
                                    
                                    Pencahayaan:<br>
                                    Pencahayaan yang baik dengan lampu sorot dan lampu operasi.<br><br>
                                    
                                    Peralatan Diagnostik:<br>
                                    Mesin pemantau vital, alat tes darah, dan perangkat EKG untuk diagnosa yang akurat.<br><br>
                                    
                                    Penyimpanan Alat:<br>
                                    Lemari dan laci penyimpanan untuk peralatan medis.<br><br>
                                    
                                    Area Pemulihan:<br>
                                    Tempat tidur dan kandang pemulihan untuk hewan yang sedang dalam proses penyembuhan.<br><br>
                                    
                                    Ventilasi dan Sanitasi:<br>
                                    Sistem ventilasi yang baik dan prosedur sanitasi ketat untuk menjaga kebersihan.<br><br>
                                    
                                    Fasilitas Penunjang:<br>
                                    Wastafel dengan sabun antiseptik, dispenser tisu, dan tempat sampah medis.<br><br>
                                    
                                    Dengan fasilitas ini, klinik hewan dapat memberikan perawatan yang optimal dan memastikan hewan peliharaan mendapatkan perawatan yang tepat dan cepat pulih.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
          
    </section>
    {{-- <section class="categories">
        <h2>Informasi Tarif RS</h2>
        <p>Menyediakan Informasi tentang biaya Rumah Sakit Hewan</p>
        <a href="{{ route('appointment.create') }}" class="detail-link">Buat Janji Temu</a>
    </section> --}}
    
    @endsection

    @section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.banner-image');
            let index = 0;

            function changeImage() {
                images.forEach(image => image.classList.remove('active'));
                images[index].classList.add('active');
                index = (index + 1) % images.length;
            }

            setInterval(changeImage, 2000); // Ganti gambar setiap 2 detik
        });
    </script>
    @endsection

</body>
</html>
