<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function show($id)
    {
        // Logika untuk mendapatkan detail penyedia berdasarkan $id
        return view('provider', compact('id'));
    }

}
