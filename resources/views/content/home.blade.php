@extends('layouts.main')

@section('title', 'Halaman Beranda')

@section('content')
<div class="mx-auto h-screen bg-gradient-to-r from-sky-900 to-slate-700  px-4 py-6 sm:px-6 lg:px-8">
   <div class="w-full h-2/4 align-bottom justify-end">

      <p class=" text-2xl mt-40 text-center text-white">welcome to</p>
       <h2 class="text-6xl font-bold mb-4 text-center  text-slate-500"> HARIANKU.id</h2>
       <p class="mb-4 text-center text-slate-500 text-sm">Amalan Setiap Harinya</p>
       <button class="block mx-auto px-4 py-1 text-center rounded-lg text-white text-sm" style=" background: linear-gradient(to right, #8a2387, #e94057, #f27121);">
         Search
       </button>
   </div>
    
</div>

@endsection