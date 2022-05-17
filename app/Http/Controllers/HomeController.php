<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()
    {
        return view('guests.welcome');
    }

    /**
     * Show the application dashboard for logged in users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.welcome');
    }

    /**
     * Show the application dashboard for logged in users.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function fallback()
    {
        if (Auth::check()) {
            return redirect('kezdolap');
        }

       return redirect('bemutatkozo');
    }
}
