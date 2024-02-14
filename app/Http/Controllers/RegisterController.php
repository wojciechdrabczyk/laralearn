<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max: 255'],
            'username' => ['required', 'min: 3', 'max: 255', Rule::unique('users', 'username')],
            'email' => ['required', 'min: 5', 'max: 255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7', 'max:255']
        ]);
        User::create($attributes);
        return redirect('/');
    }
}
