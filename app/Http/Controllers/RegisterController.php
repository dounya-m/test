<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validation
        // dd("Aymen laravel Master");
        dd("je ne france pas la tour-eiffel");
        // Store User


        // Redirect
    }
}
