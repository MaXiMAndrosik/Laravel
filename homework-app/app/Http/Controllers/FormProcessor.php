<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormProcessor extends Controller {

    public function index() {

        return view('user_form');

    }

    public function store(Request $request) {

        $userArray = ['first_name' => $request['first_name'], 'last_name' => $request['last_name'], 'email' => $request['email']];

        // return response()->json($userArray);

        return view('user', ['user' => $userArray]);

    }

}
