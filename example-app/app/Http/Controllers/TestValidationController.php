<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TestValidationController extends Controller
{

    public function show()
    {

        return view('employee_validation');
    }

    public function post(Request $request)
    {

        echo '<pre>';
        var_dump($request->all());

        // try {
            $request->validate([
                'username' => 'required',
                'password' => ['required', 'min:5'],
                // 'confirm_password' => 'required|numeric'
            ]);
        // } catch (ValidationException $e) {
        //     echo $e->getMessage();
        // }


    }
}
