<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\UsersTeam;


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
    return view('first');
});

Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});

Route::resource('ranking', 'App\Http\Controllers\UserController');
