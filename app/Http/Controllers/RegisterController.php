<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $customMessages = [
            'password_confirmation' => 'Passwords do not match.',
        ];

        $attributes = request()->validate([
            'name' => ['required', 'max: 255'],
            'username' => ['required', 'min: 3', 'max: 255', Rule::unique('users', 'username')],
            'email' => ['required', 'min: 5', 'max: 255', Rule::unique('users', 'email')],
            'password' => 'required', 'min:7', 'max:255',
//            'password_confirmation' => ['required'],
        ], $customMessages);

        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created.');
    }

    /*   public function confirmPassword(Request $request)
       {
           if (!Hash::check($request->password, $request->user()->password)) {
               return back()->withErrors([
                   'password' => ['The provided password does not match our records.']
               ]);
           }
           $request->session()->passwordConfirmed();

           return redirect()->intended();
       }*/
}
