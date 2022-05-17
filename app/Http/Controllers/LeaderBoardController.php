<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaderBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function playersLeaderBoard()
    {
        $stats = DB::table('users')
            ->join('stats', 'users.id', '=', 'stats.user_id')
            ->orderByDesc("coins")
            ->limit(10)
            ->select('users.username', 'stats.score')
            ->get();

        if (Auth::check()) {
            return view('users.leaderboards.players', ["players" => $stats]);
        }

        return view('leaderboards.players', ["players" => $stats]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function teamsLeaderBoard()
    {
        $teams = Team::all()->sortByDesc("score");

        if (Auth::check()) {
            return view('users.leaderboards.teams', ["teams" => $teams]);
        }

        return view('leaderboards.teams', ["teams" => $teams]);
    }
}
