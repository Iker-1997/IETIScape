<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use App\Models\UsersTeam;
use DB;


class GameController extends Controller
{

    public function store($info)
    {
        // Decode the JSON data
        $data = json_decode($info, true);
        $game_id = $data['game_id'];
        $user_id = $data['user_id'];

        // Insert the new data into the table

        $team = DB::table('games')->where('id', $game_id)->select('team_id')->get();
        $team_id = $team[0]->team_id;
        error_log(print_r($team_id));
        if ($team_id != null){
            $team = DB::table('users_teams')->insert([
                'user_id' => $user_id,
                'team_id' => $team_id,
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
            ]);
            error_log(print_r($team));
            return response()->json(["status" => "success", "message" => "Success! user joined"]);
        }else{
            return response()->json(["status" => "failed", "message" => "Alert! user not joined"]);
        }
    }
}
