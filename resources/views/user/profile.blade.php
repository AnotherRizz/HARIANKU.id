@extends('layouts.main')

@section('title', 'Profile Page')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white shadow-md rounded-lg p-6 md:flex md:flex-row gap-4">
        <h2 class="text-2xl font-bold mb-6">Profile</h2>
        @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
        <div class="mb-4 md:basis-1/3 ">
            <img src="{{ asset($user->gambar) }}" alt="Profile Picture" class=" w-44 h-44 mx-auto object-cover">
        </div>
        <div class=" md:basis-2/3">

         <div class="mb-4">
             <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
             <div class="bg-gray-100 p-2 rounded-lg">{{ $user->name }}</div>
         </div>
         <div class="mb-4">
             <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
             <div class="bg-gray-100 p-2 rounded-lg">{{ $user->email }}</div>
         </div>
         <div class="mb-4">
             <label class="block text-sm font-medium text-gray-700 mb-2">Joined at</label>
             <div class="bg-gray-100 p-2 rounded-lg">{{ $user->created_at->format('d M Y') }}</div>
         </div>
         <a href="/profileEdit" >
         <h4 class=" text-lg font-bold text-white text-center py-2 px-4 rounded-lg bg-purple-500">Update Profile</h4>
         </a>
         <form action="{{ route('logout') }}" method="GET" class=" mt-8 ">
             @csrf
             <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">
                 Logout
             </button>
         </form>
        </div>
    </div>
</div>
@endsection
