<?php

namespace App\Http\Controllers;

use App\Models\{Game,Stat};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.game.games',['games' => Auth::user()->games]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = Game::create([
            'user_id' => Auth::user()->id,
            'coins' => $request->input('coins'),
            'enemies' => $request->input('enemies'),
            'score' => $request->input('score'),
        ]);

        $userStat = Stat::select('*')
            ->where('user_id', Auth::user()->id)
            ->first();

        $userStat->coins += $game->coins;
        $userStat->enemies += $game->enemies;
        $userStat->score += $game->score;
        $userStat->save();

        return response()->json(['success']);
    }
}
