<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DoaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://open-api.my.id/api/doa');
        $doas = $response->successful() ? $response->json() : [];

        return view('content.doa', compact('doas'));
    }

  
}