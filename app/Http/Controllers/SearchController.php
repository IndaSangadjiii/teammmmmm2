<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }


    // public function index(Request $request)
    // {
    //     $query = $request->input('query');
    //     $type = $request->input('type');
    //     $location = $request->input('location');

    //     $services = Service::query();

    //     if ($query) {
    //         $services->where('name', 'like', '%'.$query.'%');
    //     }

    //     if ($type) {
    //         $services->where('type', $type);
    //     }

    //     if ($location) {
    //         $services->where('location', $location);
    //     }

    //     $services = $services->get();

    //     return view('search', compact('services'));
    // }

}
