<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use App\Models\UsersTeam;
use App\Models\Role;
use App\Models\RolesUsersTeam;
use DB;


class RoleController extends Controller
{

    public function update($info)
    {
        // Decode the JSON data
        $data = json_decode($info, true);
        $game_id = $data['game_id'];
        $user_id = $data['user_id'];
        $role_id = $data['role_id'];

        // Insert the new data into the table

        $role = DB::table('roles_users_games')->insert([
            'user_id' => $user_id,
            'game_id' => $game_id,
            'role_id' => $role_id,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
        ]);
        error_log(print_r($role));
        if ($role == 1){
            return response()->json(["status" => "success", "message" => "Success! role assigned"]);
        }else{
            return response()->json(["status" => "failed", "message" => "Alert! role not assigned"]);
        }
    }
}
