<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller {

    public function show($id = null) {

        // if ($id) {
        //     $employee = EmployeeModel::where('id', $id)->first();
        // }

        // return view('employee', ['employee' => $employee]);
        return view('employee', ['employee' => $id ? EmployeeModel::where('id', $id)->first() : null]);
    }

    public function store(Request $request) {

        echo '<pre>';
        var_dump($request->all());

        $employee = new EmployeeModel($request->all());
        // $employee->first_name = $request->input('first_name');
        // $employee->last_name = $request->input('last_name');
        // $employee->department = $request->input('department');
        $employee->department = serialize($request->input('department'));

        $employee->save();

        return Redirect::route('show-employee', ['id' => $employee->id]);

    }
}
