<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {        
        $name = $request->get('name');

        $data = User::orderBy('name','ASC')->name($name)->paginate(4);
        $num = $data->count();
        return view('ranking', ['data'=> $data, 'num'=> $num]);
    }
}
