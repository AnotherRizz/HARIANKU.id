@extends('auth.template')

@section('title', 'Register Page')

@section('content')
<div class="w-full flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 md:p-16">
        <h2 class="text-2xl font-bold mb-8 text-gray-700 text-center">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="md:flex md:gap-3">
               <div class="mb-4">
                   <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                   <input type="text" name="name" id="name" required autofocus
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500">
                       @error('name')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="mb-4">
                   <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                   <input type="email" name="email" id="email" required 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500">
                       @error('email')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
            </div>
            <div class="md:flex md:gap-3">
               
               <div class="mb-6">
                   <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                   <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500">
                       @error('password')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="mb-6">
                   <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Confirmed Password</label>
                   <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500">
               </div>
            </div>
           
            <button type="submit"
                class="w-full bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
               Register
            </button>
        </form>
    </div>
</div>
@endsection
