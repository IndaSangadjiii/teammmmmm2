<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ment</title>
</head>
<body>
    @extends('layouts.app1')

    @section('title', 'Notifikasi')
    
    @section('content')
    <div class="info-container">
        <h2 class="info-title">Informasi Kesehatan Hewan</h2>

        <div class="article-section">
            <h3 class="article-heading">Artikel Kesehatan Hewan</h3>

            <div class="article-items">
                <div class="article-item">
                    <img src="{{ asset('images/gambar5.jpg') }}" alt="Gambar Artikel 1" class="article-image">
                    <h4><a href="{{ route('artikel1') }}" class="article-link">Cara Merawat Kesehatan Hewan Peliharaan Anda</a></h4>
                    <p>Deskripsi singkat tentang cara merawat kesehatan hewan peliharaan Anda.</p>
                </div>

                <div class="article-item">
                    <img src="{{ asset('images/gambar4.jpg') }}" alt="Gambar Artikel 2" class="article-image">
                    <h4><a href="{{ route('artikel2') }}" class="article-link">Pentingnya Vaksinasi untuk Hewan Peliharaan</a></h4>
                    <p>Deskripsi singkat tentang pentingnya vaksinasi untuk hewan peliharaan.</p>
                </div>

                <div class="article-item">
                    <img src="{{ asset('images/gambar6.jpg') }}" alt="Gambar Artikel 3" class="article-image">
                    <h4><a href="{{ route('artikel3') }}" class="article-link">Gejala Penyakit yang Perlu Diwaspadai</a></h4>
                    <p>Deskripsi singkat tentang gejala penyakit yang perlu diwaspadai pada hewan.</p>
                </div>
            </div>
        </div>
    </div>
    
    <section class="notifications">
    <section class="gallery-section">
        <h3 class="gallery-heading">Galeri Foto</h3>
        <p class="gallery-text">
            Berikut adalah foto dokumentasi tentang pengobatan hewan:
        </p>
        <div class="gallery">
            <img src="{{ asset('images/periksa.jpeg') }}" alt="Foto 1" class="gallery-image">
            <img src="{{ asset('images/anjing03.jpeg') }}" alt="Foto 2" class="gallery-image">
            <img src="{{ asset('images/orang.jpeg') }}" alt="Foto 3" class="gallery-image">
            <img src="{{ asset('images/kucing111.jpeg') }}" alt="Foto 4" class="gallery-image">
            <img src="{{ asset('images/periksa.jpeg') }}" alt="Foto 1" class="gallery-image">
            <img src="{{ asset('images/k10.jpeg') }}" alt="Foto 2" class="gallery-image">
            <img src="{{ asset('images/111.jpeg') }}" alt="Foto 3" class="gallery-image">
            <img src="{{ asset('images/k3.jpeg') }}" alt="Foto 4" class="gallery-image">
            <img src="{{ asset('images/orang.jpeg') }}" alt="Foto 3" class="gallery-image">
            <img src="{{ asset('images/ajg.jpeg') }}" alt="Foto 4" class="gallery-image">
        </div>
    </section>
</section>
    
    @endsection
    
    

</body>
</html>
