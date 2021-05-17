<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RoleController;

use App\Models\User;
use App\Models\UsersTeam;
use App\Models\Screen;
use App\Models\Game;
use App\Models\RolesUsersGame;
use App\Models\Roles;


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
})->middleware(['auth'])->name('team');

Route::get('/election', function () {

    $user_id = Auth::user()->id;
    $team = DB::table('games')->join('teams', 'games.team_id', '=', 'teams.id')->join('users_teams', 'teams.id', '=', 'users_teams.team_id')->where('users_teams.user_id', $user_id)->select('teams.name')->orderBy('users_teams.created_at', 'DESC')->first();
    $team_name = $team->name;
    return view('election', [
        'team_name' => $team_name
    ]);
})->middleware(['auth'])->name('election');

Route::get('/intro', function () {
    return view('intro');
})->middleware(['auth'])->name('intro');

Route::get('/first', function () {
    $screen = Screen::select('data')->where('order',1)->inRandomOrder()->first();
    $data = json_decode($screen, true);
       return view('first', [
        'data' => $data
    ]);
})->middleware(['auth'])->name('first');

Route::get('/second', function () {
    $screen = Screen::select('data')->where('order',2)->inRandomOrder()->first();
    $data = json_decode($screen, true);
       return view('second', [
        'data' => $data
    ]);
})->middleware(['auth'])->name('second');

Route::get('/third', function () {
    $screen = Screen::select('data')->where('order',3)->inRandomOrder()->first();
    $data = json_decode($screen, true);
        return view('third', [
        'data' => $data
    ]);
})->middleware(['auth'])->name('third');

Route::get('/fourth', function () {
    $screen = Screen::select('data')->where('order',4)->inRandomOrder()->first();
    $data = json_decode($screen, true);
        return view('fourth', [
        'data' => $data
    ]);
})->middleware(['auth'])->name('fourth');

Route::get('/fifth', function () {
    $screen = Screen::select('data')->where('order',5)->inRandomOrder()->first();
    $data = json_decode($screen, true);
        return view('fifth', [
        'data' => $data
    ]);
})->middleware(['auth'])->name('fifth');

Route::get('/end', function () {
    return view('end');
})->middleware(['auth'])->name('end');

Route::resource('ranking', 'App\Http\Controllers\TeamController');
Route::get('/logout', '\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

Route::post('/api/games', function (Request $request) {
    $id = $request->input('game_id');
    $users = DB::table('games')
    ->join('teams', 'games.team_id', '=', 'teams.id')
    ->join('users_teams', 'teams.id', '=', 'users_teams.team_id')
    ->join('users', 'users_teams.user_id', '=', 'users.id')
    ->where('games.id', $id)
    ->select('users.name')->get();
    return response()->json($users);
});

Route::get('/api/createGame/{id}/{teamName}', function (Request $request) {
    $team = new TeamController;
    return $team->store(json_encode([
        "id" => $request->route('id'),
        "teamName" => rawurldecode($request->route('teamName'))
    ]));
});

Route::get('/api/joinGame/{user_id}/{game_id}', function (Request $request) {
    $team = new GameController;
    return $team->store(json_encode([
        "user_id" => $request->route('user_id'),
        "game_id" => $request->route('game_id')
    ]));
});

Route::get('/api/assignRole/{user_id}/{role_id}', function (Request $request) {
    $user_id = $request->route('user_id');
    $game = DB::table('games')->join('teams', 'games.team_id', '=', 'teams.id')->join('users_teams', 'teams.id', '=', 'users_teams.team_id')->where('users_teams.user_id', $user_id)->select('games.id')->orderBy('users_teams.created_at', 'DESC')->first();
    $game_id = $game->id;
    $role = new RoleController;
    return $role->update(json_encode([
        "user_id" => $user_id,
        "role_id" => $request->route('role_id'),
        "game_id" => $game_id
    ]));
});