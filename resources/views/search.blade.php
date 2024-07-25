<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    @extends('layouts.app1')

@section('title', 'Pencarian')

@section('content')
<section class="search">
    <div class="about-container">
        <h2 class="about-title">Tentang Kami</h2>
        <div >
            <div class="about-section">
                <img src="{{ asset('images/111.jpg') }}" alt="Clinic Image" class="about-image">
            <p class="about-text">
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Klinik Hewan Peliharaan adalah fasilitas medis yang berkomitmen untuk memberikan perawatan kesehatan holistik dan terbaik untuk hewan peliharaan Anda. Klinik Dan petshop yang menyediakan jasa pemeriksaan hewan serta menjual barang kebutuhan hewan
           </p>
        </div>
        <div><h3 class="about-heading"> <br> <br><i class="fas fa-bullseye"></i> Visi & Misi</h3></div>
        <div class="about-section">
            
            <p class="about-text">
                <strong>Visi:</strong> <br>Menjadikan Klinik Hewan yang lebih unggul di kota Ambon. &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;
            </p>
            {{-- <p class="about-text">
                <strong>Misi:</strong>
            </p> --}}
            <ul class="mission-list">
                <strong>Misi:</strong><br>
                <li><i class="fas fa-paw"></i> Memberikan layanan kesehatan hewan yang berkualitas dan ramah</li>
                <li><i class="fas fa-paw"></i> Mengedukasi pemilik hewan tentang pentingnya perawatan kesehatan hewan.</li>
                <li><i class="fas fa-paw"></i> Menjalin hubungan yang baik dengan komunitas dan pemilik hewan peliharaan.</li>
                <li><i class="fas fa-paw"></i> Menerapkan inovasi terbaru dalam perawatan kesehatan hewan.</li>
            </ul>
        </div>
    </div>
    <section class="results">
        <h2 class="motto-heading">
            <strong><i class="fas fa-heartbeat"></i> Moto:</strong> "Kesehatan Hewan Adalah Kebahagiaan Kita"
        </h2>
        <!-- Hasil pencarian akan ditampilkan di sini -->
    </section>
</section>


@endsection

</body>
</html>
