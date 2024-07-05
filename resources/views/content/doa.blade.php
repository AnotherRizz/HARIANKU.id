@extends('layouts.main')

@section('title', 'Doa Sehari Hari')

@section('content')
    <div class="w-full">
        <div class="flex flex-row gap-4 p-2 mt-3 ">
            <!-- List Doa -->
            <div class="basis-1/3 bg-white h-[80vh] rounded-md overflow-y-auto">
                @foreach ($doas as $doa)
                    {{-- card --}}
                    <div onclick="showDoa({{ json_encode($doa) }})"
                        class="bg-gradient-to-r from-sky-500 to bg-purple-500 rounded-lg overflow-hidden text-center my-4 w-5/6 mx-auto cursor-pointer">
                        <div class="px-6 py-4 relative">
                            <h1 class="text-white font-bold">{{ $doa['id'] }}.{{ $doa['judul'] }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Detail Doa -->
            <div id="doaDetail" class="basis-2/3 bg-white h-auto rounded-md">
                <div
                    class="bg-gradient-to-r from-sky-500 to bg-purple-500 h-auto rounded-lg overflow-hidden text-center w-11/12 my-4 mx-auto">
                    <div class="px-6 py-4 relative">
                        <h1 id="doaJudul" class="text-4xl text-white font-bold">Pilih Doa Di list sebelah kiri</h1>
                    </div>
                </div>
                <div class="bg-neutral-200 h-auto rounded-lg overflow-hidden text-center w-11/12 my-4 mx-auto">
                    <div class="px-6 py-4 relative">
                        <h1 id="doaArab" class="text-5xl text-end font-arabic my-5"></h1>
                        <p id="doaLatin" class="text-sm font-bold text-pink-600 text-start mt-9"></p>
                        <p id="doaTerjemah" class="text-sm font-bold text-gray-800 text-start mt-9"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDoa(doa) {
            document.getElementById('doaJudul').textContent = doa.judul;
            document.getElementById('doaArab').textContent = doa.arab;
            document.getElementById('doaLatin').textContent = doa.latin;
            document.getElementById('doaTerjemah').textContent = doa.terjemah;
        }
    </script>
@endsection
