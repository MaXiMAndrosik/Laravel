<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;


class NewUserController extends Controller {

    public function index() {

        session()->forget('new_user');

        $allUsers = NewUser::all();
        $users = [];

        foreach ($allUsers as $person) {
            $user = [
                'id' => $person->id,
                'name' => $person->name,
                'surname' => $person->surname,
                'email' => $person->email
            ];

            $users[] = $user;
        }

        return view('all_users', ['users' => $users]);
    }

    public function getUser($id = null) {

        session()->forget('new_user');

        return view('user_info', ['user' => $id ? NewUser::where('id', $id)->first() : null]);
    }

    public function createUser($newUserData = null) {
        $newUserData = session()->get('new_user');
        // return view('new_user_form');
        return view('new_user_form', ['user' => $newUserData]);
    }

    public function storeUser(Request $request) {

        $newUserData = [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email')
        ];

        session()->put('new_user', $newUserData);

        $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'email' => ['required', 'email'],
        ]);

        $user = new NewUser($request->all());

        $user->save();

        return Redirect::route('get-users');

    }

}
