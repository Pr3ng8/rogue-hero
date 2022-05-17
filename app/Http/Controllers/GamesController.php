<?php

namespace App\Http\Controllers;

use App\Models\{Game, Stat, Team, User};
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
     */
    public function store(Request $request)
    {
        $game = Game::create([
            'user_id' => $request->input('user_id'),
            'coins' => $request->input('coins'),
            'enemies' => $request->input('enemies'),
            'score' => $request->input('score'),
        ]);
        $game->save();

        $userStat = Stat::select('*')
            ->where('user_id', $request->input('user_id'))
            ->first();

        $userStat->coins += $game->coins;
        $userStat->enemies += $game->enemies;
        $userStat->score += $game->score;
        $userStat->save();

        $user = User::find($request->input('user_id'));

        $user->team->coins += $game->coins;
        $user->team->enemies += $game->enemies;
        $user->team->score += $game->score;
        $user->team->save();

        return response()->json(['success' => 'ok'])
            ->setStatusCode(200);
    }
}
