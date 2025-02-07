<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SimpleController extends Controller
{
    //
    public function test(Request $request) {
        // var_dump($request);

        // echo $request->param . PHP_EOL;
        // echo $request->param2 . PHP_EOL;

        $response = ['param1' => $request->param, 'param2' => $request->param2, 'param3' => $request->param3];

        return new Response(json_encode($response));
        // return response()->json($response);

    }
}
