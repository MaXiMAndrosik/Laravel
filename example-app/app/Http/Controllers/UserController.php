<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function showUsers() {
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'last_name', 'email'])->get();
        
        // return view('users', ['users' => $users]); // views/ users.blade.php
        return view('user', ['users' => $users]); // views/ user.twig
    }

    public function index() {

        return view('form');

    }

    public function store(Request $request){

        $userData = ['first_name' => $request->username, 'email' => $request->email];

        return response()->json($userData);


    }

}
