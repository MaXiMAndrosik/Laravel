<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller {

    public function testRequest(Request $request) {

    // $request->input()
        $firstName = $request->input('first_name', 'No name');
        $lastName = $request->input('last_name', 'No name');
        $email = $request->input('email', 'no mail');
        echo $firstName . ' ' . $lastName . ' ' . $email . PHP_EOL;

    // $request->all()
        $requestAllParametrs = $request->all();
        echo '<pre>';
        print_r($requestAllParametrs);
        echo $requestAllParametrs['first_name'];

    // $request->collect()
        $requestCollectParametrs = $request->collect();
        echo '<pre>';
        var_dump($requestCollectParametrs);

        $requestCollectParametrs->each(function($field) {
            echo $field . PHP_EOL;
        });
    }

}
