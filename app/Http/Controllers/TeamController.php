<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use DB;


class TeamController extends Controller
{
    public function index(Request $request)
    {        
        $name = $request->get('name');

        $data = DB::table('games')->join('teams', 'games.team_id', '=', 'teams.id')->select('games.time', 'teams.name')->orderBy('games.time', 'ASC')->get();
        $num = $data->count();
        return view('ranking', ['data'=> $data, 'num'=> $num]);
    }
}
