<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.home');
    }
    public function profile(){
        $user = Auth::user();
        return view('user.profile', compact('user'));

    }
}