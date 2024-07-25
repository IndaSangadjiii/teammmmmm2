<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function jadwalDokter()
    {
        // Logika untuk menampilkan jadwal dokter
        return view('jadwal_dokter');
    }
}
