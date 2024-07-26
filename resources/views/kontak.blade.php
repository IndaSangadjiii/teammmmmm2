<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app1')

    @section('title', 'Kontak Kami')

    @section('content')
        <div class="contact-container">

            <h2>Kontak Kami</h2>
            <div class="contact-info">
                <div>
                    <h3><a href="#"><i class="fab fa-whatsapp"></i></a> WhatsApp</h3>
                    <a href="https://wa.me/+6282199588533" target="_blank">+62 821-9958-8533<br>
                        Klik di sini</a>
                </div>
                <div>
                    <h3><a href="#"><i class="fab fa-instagram"></i></a> Instagram</h3>
                    <a href="https://www.instagram.com/vetz_petshop_ambon?igsh=MnJhbWFkb2E5eWNq"
                        target="_blank">@vetz_petshop_ambon<br>
                        Klik di sini</a>
                </div>
                <div>
                    <h3><a href="#"><i class="fab fa-facebook-f"></i></a> Facebook</h3>
                    <a href="https://www.facebook.com/vetzpetcare?mibextid=ZbWKwL" target="_blank">Vetz Petshop/Petcare<br>
                        Klik di sini</a>
                </div>
                {{-- <div>
                <h3>Email</h3>
                <a href="mailto:email@hasniarumbia46@gai.com">email@klinikhewan.com</a>
            </div> --}}
            </div>

            <div class="map-container" style="max-width: 1600px; height: 550px; width: 100%; aspect-ratio: 16 / 9; margin: 0 auto; display: block;">
                <h3>Lokasi Kami</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d666.2835413681275!2d128.1954358643216!3d-3.679954108179707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce941f19c81f7%3A0x59b0c4151c5658ef!2sVetz%20Praktek%20Dokter%20Hewan!5e1!3m2!1sid!2sid!4v1721714435769!5m2!1sid!2sid" style="width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="feedback-form">
                <br>
                <br>
                <br>
                <h3>Kritik dan Saran</h3>
                <form action="{{ route('kritik.saran.submit') }}" method="POST">
                    @csrf
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">No Handphone:</label>
                    <input type="text" id="phone" name="phone" required>

                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" maxlength="255" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
    @endsection

</body>

</html>
