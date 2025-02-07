<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendFileController extends Controller {

    public function __invoke() {

        // return response()->file('D:\PROGRAMS\Laravel\example-app\public\uploads\pdp-test.pdf');
        return response()->file('./uploads/pdp-test.pdf');

    }

}
