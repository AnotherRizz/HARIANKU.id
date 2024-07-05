<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SurahController extends Controller
{
    public function index()
    {
        $client = new Client();
        
        // Ambil data Surah nomor 1
        $response1 = $client->request('GET', 'https://equran.id/api/v2/surat/1', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        $surah1 = json_decode($response1->getBody(), true);

        // Ambil data Surah nomor 78 hingga 114
        $surahs78to114 = [];
        for ($i = 78; $i <= 114; $i++) {
            $response = $client->request('GET', "https://equran.id/api/v2/surat/$i", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
            ]);
            $surah = json_decode($response->getBody(), true);
            $surahs78to114[] = $surah;
        }

        // Gabungkan data Surah nomor 1 dan Surah nomor 78 hingga 114
        $allSurahs = array_merge([$surah1], $surahs78to114);

        return view('content.surah', ['surahs' => $allSurahs]);
    }
    public function show($id)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "https://equran.id/api/v2/surat/$id", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    
        $surah = json_decode($response->getBody(), true);

        return view('content.showSurah', ['surah' => $surah['data']]);
    }
}