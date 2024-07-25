{{-- resources/views/anjing.blade.php --}}

@extends('layouts.app')

@section('title', 'Jadwal Dokter Anjing')

@section('content')
<div class="jadwal-container">
    <h2 class="jadwal-title">Jadwal Dokter Spesialis Anjing</h2>
    <ul class="jadwal-list">
        <li class="jadwal-item">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Dokter Anjing 1" class="jadwal-image">
            <div class="jadwal-content">
                <h3><strong>Dr. Budi Utomo</strong></h3>
                <p class="jadwal-description">Senin - Jumat</p>
            </div>
        </li>
        <li class="jadwal-item">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Dokter Anjing 2" class="jadwal-image">
            <div class="jadwal-content">
                <h3><strong>Dr. Nyi Rorokidul</strong></h3>
                <p class="jadwal-description">Rabu - Minggu</p>
            </div>
        </li>
        <li class="jadwal-item">
            <img src="{{ asset('images/gambar3.jpg') }}" alt="Dokter Anjing 3" class="jadwal-image">
            <div class="jadwal-content">
                <h3><strong>Dr. Kanjeng Nyai Ratu</strong></h3>
                <p class="jadwal-description">Senin</p>
            </div>
        </li>
    </ul>
    <a href="{{ route('jadwal_dokter') }}" class="jadwal-link">Kembali</a>
    <a href="#" class="jadwal-link">Kembaliiii</a>
</div>
@endsection
