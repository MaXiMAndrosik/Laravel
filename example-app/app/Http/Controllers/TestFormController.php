<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class TestFormController extends Controller {
    
    public function displayForm() {

        return view('myform');

    }

    public function postForm(Request $request) {

        echo $request['username'] . '<br>';
        echo $request->input('username') . '<br>';
        echo $request->input('password') . '<br>';
        echo $request->input('number') . '<br>';
        echo $request->input('hidden') . '<br>';
        echo $request->input('gender') . '<br>';
        var_dump($request->input('checkbox'));

    }
}
