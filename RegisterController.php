<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\confirm;

class RegisterController extends Controller
{
    public function create()
    {
        return view('client.auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'alpha', "min:3", "max:25"],
            'lastname' => ['nullable', 'string', 'alpha', "min:3", "max:25"],
            'username' => ['required', 'string', "alpha_num", "min:3", "max:25", Rule::unique('users')],
            'password' => ['required', 'string', "min:8", "confirmed"],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname ?? null,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return to_route('search')->with([
            'success' => "Siz üstünlikli hasaba alyndyňyz"
        ]);
    }
}
