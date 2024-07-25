<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialistDoctorController extends Controller
{
    public function showAnjing()
    {
        return view('specialist.anjing');
    }

    public function showKucing()
    {
        return view('specialist.kucing');
    }

    public function showAyam()
    {
        return view('specialist.ayam');
    }
}
