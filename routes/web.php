<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\User;
use App\Models\UsersTeam;
use App\Models\Screen;
use App\Models\Game;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('landing');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/election', function () {
    $teams = DB::table('teams')->join('users_teams', 'teams.id', '=', 'users_teams.team_id')->where('users_teams.user_id', Auth::user()->id)->get();
    $team = json_decode($teams, true);
    return view('election', [
        'team' => $team
    ]);
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/first', function () {
    $screen = Screen::select('data')->where('order',1)->inRandomOrder()->first();
    $data = json_decode($screen, true);
       return view('first', [
        'data' => $data
    ]);
});

Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});

Route::post('/api/games', function (Request $request) {
    $id = $request->input('id');
    $users = DB::table('games')
    ->join('teams', 'games.team_id', '=', 'teams.id')
    ->join('users_teams', 'teams.id', '=', 'users_teams.team_id')
    ->join('users', 'users_teams.user_id', '=', 'users.id')
    ->where('games.id', $id)
    ->select('users.name')->get();
    return response()->json($users);
});

Route::post('/api/hello', function () {
    // crear un nuevo registro en tabla games
    // recoger el id de la partida creada
    // devolver el id
    return 'hello';
});

Route::resource('ranking', 'App\Http\Controllers\UserController');
