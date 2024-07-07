@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<div class="w-full max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md ">
    <div class="flex mb-6">

        <h2 class="text-2xl font-bold mb-6 mx-5">Update Profile</h2>
        <a href="/profile">
        <button type="submit" class="bg-purple-500 text-white font-bold text-xs py-1 px-4 rounded-lg">Batal</button>
    </a>
    </div>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="md:w-full md:flex md:flex-row gap-4">

            <div class="md:flex md:gap-5 md:mx-auto">
    
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-2 border rounded-lg @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="md:w-full md:flex md:flex-row gap-4">

            <div class="md:flex md:gap-5 md:mx-auto">
    
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border rounded-lg">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Profile Picture</label>
            <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg @error('gambar') border-red-500 @enderror">
            @error('gambar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white font-bold text-xs py-2 px-4 rounded-lg">Update Profile</button>
    </form>
</div>
@endsection
