@extends('layouts.main')

@section('title', 'Surah Pendek')

@section('content')
<div class="title text-center my-8">
   <h1 class="text-2xl md:text-4xl text-slate-900 font-extrabold">Kumpulan Surah Pendek Juz 30 </h1>
   <p class="text-md md:text-lg text-slate-700 font-semibold">Beserta Terjemahannya</p>
   <p class="text-md md:text-xs text-slate-500 font-medium">Sumber E Quran</p>
</div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-3 mt-6">
      @foreach ($surahs as $surah)
        {{-- Card 1 --}}
        <a href="{{ route('surah.show', $surah['data']['nomor']) }}" class="flex items-center justify-center">
            <div class="w-full  bg-gradient-to-r from-sky-500 to bg-purple-500 shadow-lg rounded-lg overflow-hidden text-center">
                <div class="px-6 py-4 relative">
                    <span class="absolute left-2 top-2 px-5 py-2 rounded-full bg-slate-600 text-slate-300 text-xl font-bold">{{ $surah['data']['nomor'] }}</span>
                    <div class="font-bold text-xl ">{{ $surah['data']['nama'] }}</div>
                    <div class="font-extrabold text-3xl mb-1">{{ $surah['data']['namaLatin'] }}</div>
                    <p class="text-sm font-bold text-slate-600">Arti :{{ $surah['data']['arti'] }}</p>
                    <p class="text-sm font-bold text-slate-600">{{ $surah['data']['jumlahAyat'] }} Ayat</p>
               
                </div>
            </div>
        </a>
        @endforeach
       

        
    </div>
@endsection
