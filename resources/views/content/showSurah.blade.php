@extends('layouts.main')

@section('title', 'Detail Surah')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="bg-gradient-to-r from-sky-500 to bg-purple-500 shadow-lg rounded-lg overflow-hidden text-center mb-6">
            <div class="px-6 py-4 relative">
                <span class="absolute left-2 top-2 text-white text-3xl font-bold">{{ $surah['nomor'] }}</span>
                <div class="font-extrabold text-white text-2xl mb-2">{{ $surah['namaLatin'] }} ({{ $surah['nama'] }})</div>
                <p class="text-sm font-bold text-slate-600">{{ $surah['arti'] }}</p>
                <p class="text-sm font-bold text-slate-600">{{ $surah['jumlahAyat'] }} ayat</p>
                <p class="text-sm font-bold text-slate-600">{{ $surah['tempatTurun'] }}</p>
           
            </div>
        </div>

        @foreach ($surah['ayat'] as $ayat)
            <div class="bg-white md:w-2/3 mx-auto shadow-md rounded-lg mb-4 p-4 text-center">
                <p class="text-gray-700 text-xl md:text-4xl font-arabic"> {{ $ayat['teksArab'] }} <span></span></p>
                <p class="text-gray-900 text-sm mt-2">{{ $ayat['teksLatin'] }}</p>
                <p class="text-gray-500 text-xs mt-2">{{ $ayat['nomorAyat'] }}. {{ $ayat['teksIndonesia'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
