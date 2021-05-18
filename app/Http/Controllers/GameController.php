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
        if ($team_id != null){
            $team = DB::table('users_teams')->insert([
                'user_id' => $user_id,
                'team_id' => $team_id,
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
            ]);
            return response()->json(["status" => "success", "message" => "Success! user joined"]);
        }else{
            return response()->json(["status" => "failed", "message" => "Alert! user not joined"]);
        }
    }

    public function update($info)
    {
        // Decode the JSON data
        $datos = json_decode($info, true);
        $gameid = $datos['game_id'];

        // Insert the new data into the table
        $find_time = DB::table('games')->select("created_at")->where('id', $gameid)->get();
        $time_start = $find_time[0]->created_at;

        $game_time = date("Y-m-d H:i:s", strtotime('now') - strtotime($time_start));

        $game = DB::table('games')->where('id', $gameid)->update([
            'time' => $game_time,
            'finished' => true,
            'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);

        if ($game == 1){
            return response()->json(["status" => "success", "message" => "Success! game ended"]);
        }else{
            return response()->json(["status" => "failed", "message" => "Alert! game not ended"]);
        }
    }
}
