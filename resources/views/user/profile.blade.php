@extends('layouts.main')

@section('title', 'Profile Page')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6">Profile</h2>
        <div class="mb-4">
            <img src="{{ asset($user->gambar) }}" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto">
        </div>
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
        <form action="{{ route('logout') }}" method="GET" class="mt-4">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
