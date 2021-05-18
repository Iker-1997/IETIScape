<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use App\Models\UsersTeam;
use DB;


class TeamController extends Controller
{
    public function index(Request $request)
    {        
        $name = $request->get('name');

        $data = DB::table('games')->join('teams', 'games.team_id', '=', 'teams.id')->select('games.time', 'teams.name')->where('finished', 1)->orderBy('games.time', 'ASC')->get();
        $num = $data->count();
        return view('ranking', ['data'=> $data, 'num'=> $num]);
    }

    public function store($info)
    {
        // Decode the JSON data
        $data = json_decode($info, true);
        $team_name = $data['teamName'];

        // Insert the new data into the table
        $team = DB::table('teams')->insert([
            'name' => $team_name,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);

        if($team == 1) {
            $team_id = DB::getPDO()->lastInsertId();
        }

        $user_id = $data['id'];
        $userTeam = DB::table('users_teams')->insert([
            'user_id' => $user_id,
            'team_id' => $team_id,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);

        $game_itinerary_rand = rand(1,2);

        $game = DB::table('games')->insert([
            'team_id' => $team_id,
            'itinerary' => $game_itinerary_rand,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);

        if($game == 1) {
            $game_id = DB::getPDO()->lastInsertId();

            $game_itinerary_array = DB::table('games')->select('itinerary')->where('id', $game_id)->get();
            $game_itinerary = $game_itinerary_array[0]->itinerary;

            $screens = DB::table('screens')->select('id')->where('itinerary', $game_itinerary)->get();

            foreach ($screens as $screen){
                $itinerary = DB::table('itineraries')->insert([
                    'screen_id' => $screen->id,
                    'game_id' => $game_id,
                    'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                    'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
                ]);
            }

            return response()->json(["status" => "success", "message" => "Success! team and game created", "game_id" => $game_id]);
        }else {
            return response()->json(["status" => "failed", "message" => "Alert! term not created"]);
        }
    }
}
