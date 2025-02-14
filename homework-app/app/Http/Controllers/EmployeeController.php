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

    public function newIndex() {

        return view('form');
        
    } 

    public function store(Request $request)  {

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $position_held = $request->input('position_held');
        $address = $request->input('address');
        $description = $request->input('description');
        $work_data = $request->input('work_data');
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        $jsonData = json_decode($request->input('json_data'));

        foreach ($jsonData as $key => $value) {
            if ($key == 'chat_id') {
                $chat_id = $value;
            }
            if ($key == 'text') {
                $text = $value;
            }
        }

        var_dump($first_name, $last_name, $position_held, $address, $description, $work_data, $path, $url, $chat_id, $text);
        
    }

    public function update(Request $request, $id)  {

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $position_held = $request->input('position_held');
        $address = $request->input('address');
        $description = $request->input('description');
        $work_data = $request->input('work_data');
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        $jsonData = json_decode($request->input('json_data'));

        foreach ($jsonData as $key => $value) {
            if ($key == 'chat_id') {
                $chat_id = $value;
            }
            if ($key == 'text') {
                $text = $value;
            }
        }

        var_dump($first_name, $last_name, $position_held, $address, $description, $work_data, $path, $url, $chat_id, $text);
        
    }

    public function getPath(Request $request) {
        return $request->path();
    }

    public function getUrl(Request $request) {
        return $request->url();
    }

}
