<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/election', function () {
    return view('election');
});

Route::get('/ranking', function () {
    $data = User::orderBy('time','ASC')->get();
    $num = $data->count();
    return view('ranking', ['data'=> $data, 'num'=> $num]);
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
