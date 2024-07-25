<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Sesuaikan dengan model Service yang sesuai

class ServiceController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id); // Ambil data layanan berdasarkan ID
        return view('service.detail', compact('service'));
    }
}
