<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Muestro arhivo register.blade.php
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd('Creando usuario...');

        $validated = $request->validate([
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:3|max:25',
            'email' => 'required|unique:users|email|max:50',
            'date_birth' => 'required|date',
            'password' => 'required|confirmed|min:8'
        ]);
    }
}
