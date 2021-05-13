<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('name','ASC')->get();
        $num = $data->count();
        return view('ranking', ['data'=> $data, 'num'=> $num]);
    }
}
