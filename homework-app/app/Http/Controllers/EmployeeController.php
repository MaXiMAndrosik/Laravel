<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller {

    public function index() {

        $employees = Employee::all();

        $users = [];

        foreach ($employees as $employee) {

            $user = [
                'first_name' => $employee->first_name,
                'last_name' => $employee->last_name,
                'age' => $employee->age,
                'email' => $employee->email];
            
                $users[] = $user;

        }

        return view('employees', ['users' => $users]);

    }

    public function storeEmployee(Request $request) {

        $employee = new Employee();
        $employee->first_name = $request['first_name'];
        $employee->last_name = $request['last_name'];
        $employee->age = $request['age'];
        $employee->email = $request['email'];
        $employee->save();

        return $this->index();
    }

}
