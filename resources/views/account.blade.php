<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Akun Pengguna')

@section('content')
<section class="account">
    <div class="services-container">
        <h1 class="services-title">Fasilitas Pelayanan</h1>
    
            <div class="services-section">
                <h3 class="services-heading">Jadwal Klinik</h3>
                <p class="services-text">
                    Klinik Hewan Peliharaan buka setiap hari kecuali hari Minggu. Jam layanan pada hari-hari lain adalah sebagai berikut:
                </p>
        
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam Operasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Minggu</td>
                            <td>Tutup</td>
                        </tr>
                        <tr>
                            <td>Senin</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>17:00 - 19:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    
        <div class="services-section">
            <h3 class="services-heading">Tarif Pelayanan</h3>
            <p class="services-text">
                Berikut adalah tarif pelayanan yang kami tawarkan:
            </p>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Jenis Pelayanan</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pemeriksaan Umum</td>
                        <td>Rp 50.000</td>
                    </tr>
                    <tr>
                        <td>Penyakit Kulit</td>
                        <td>Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>Perawatan Gigi</td>
                        <td>Rp 200.000</td>
                    </tr>
                    <tr>
                        <td>Vaksinasi</td>
                        <td>Rp 80.000 - Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>Sterilisasi</td>
                        <td>Rp 500.000</td>
                    </tr>
                    <tr>
                        <td>Rawat Inap</td>
                        <td>Rp 300.000 per hari</td>
                    </tr>   
                </tbody>
            </table>
        </div>



        {{-- <div class="services-section">
            <h3 class="services-heading">Fasilitas dan Kebutuhan</h3>
            <p class="services-text">
                Berikut adalah Fasilitas yang di sediakan Klinik.
            </p>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Fasilitas</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Untuk Pengunjung</td>
                        <td>Toilet</td>
                    </tr>

                </tbody>
            </table>
        </div> --}}

        <div class="services-section">
            <h3 class="services-heading"></h3>
            <p class="services-text">
                Berikut adalah kebutuhan-kebutuhan hewan peliharaan yang di sediakan Klinik.
            </p>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Kebutuhan</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>makanan Kucing</td>
                        <td>Rp 40.000</td>
                    </tr>
                    <tr>
                        <td>Vitamin</td>
                        <td>Rp 20.000</td>
                    </tr>
                    <tr>
                        <td>Aksesoris</td>
                        <td>Rp 20.000 &nbsp;&nbsp; -  &nbsp;&nbsp;Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>Tas Kucing Ukuran M</td>
                        <td>Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>Tas Kucing Ukuran L</td>
                        <td>Rp 175.000</td>
                    </tr>
                    <tr>
                        <td>Pasir Kucing Wangi Bentonite  Repack 1kg</td>
                        <td>Rp 5.000 </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    
        <div class="services-section">
            <h3 class="services-heading">DOKTER</h3>
            <p class="services-text">
                Pemilik Vetz PRAKTEK DOKTER HEWAN
            </p>
            <ul class="jadwal-list">
                <li class="jadwal-item">
                    <img src="{{ asset('images/gambar1.jpg') }}" alt="Dokter Anjing 1" class="jadwal-image">
                    <div class="jadwal-content">
                        <h3><strong>Dr.Sc.Drh.Faradilla Attamimi, MTAPSc.</strong></h3>
                        <p class="jadwal-description">Dokter</p>
                    </div>
                </li>
                
            </ul>
        </div>
    
        <div class="services-section">
            <h3 class="services-heading">Dokter Khusus Hewan</h3>
            <p class="services-text">
                Kami memiliki dokter-dokter hewan khusus dengan jadwal sebagai berikut:
            </p>
            <ul class="jadwal-list">
                <li class="jadwal-item">
                    <img src="{{ asset('images/gambar1.jpg') }}" alt="Dokter Anjing 1" class="jadwal-image">
                    <div class="jadwal-content">
                        <h3><strong>Dr. Aftril</strong></h3>
                        <p class="jadwal-description">Kamis - Sabtu</p>
                    </div>
                </li>
                <li class="jadwal-item">
                    <img src="{{ asset('images/gambar2.jpg') }}" alt="Dokter Anjing 2" class="jadwal-image">
                    <div class="jadwal-content">
                        <h3><strong>Dr. Via</strong></h3>
                        <p class="jadwal-description">Senin - Rabu</p>
                    </div>
            </ul>
        </div>
    </div>
</section>
@endsection

</body>
</html>