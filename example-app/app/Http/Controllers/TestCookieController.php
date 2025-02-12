<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCookieController extends Controller {

    public function testCookie(Request $request) {

        $sessionIdentify = $request->cookie('laravel_session');

        echo $sessionIdentify;

        $session = $request->session();

        // echo '<pre>';
        // var_dump($session);

        echo $session->get('_token');

    }
    
}
