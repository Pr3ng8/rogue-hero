<?php

namespace App\Http\Controllers;

use App\Models\{User,Stat};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('guests.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $stat = Stat::create(['user_id' => $user->id]);
        $stat->save();

        Auth::login($user);

        return view('users.welcome');
    }
}
