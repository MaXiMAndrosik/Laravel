<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHeaderController extends Controller {

    public function getHeader(Request $request) {

        $userAgent = $request->header('User-Agent', 'default value');

        echo $userAgent;

        $allHeaders = $request->headers;

        echo '<pre>';

        var_dump($allHeaders);
        
    }

}
