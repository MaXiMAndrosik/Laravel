<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
    //
    protected $users = [
        ['id' => 0, 'username' => 'user1', 'first_name' => 'vasyli', 'last_name' => 'vasyliev', 'list_of_books' => ['book1', 'book2']],
        ['id' => 1, 'username' => 'user2', 'first_name' => 'petr', 'last_name' => 'petrov', 'list_of_books' => ['book3', 'book4']],
        ['id' => 2, 'username' => 'user3', 'first_name' => 'ivan', 'last_name' => 'ivanov', 'list_of_books' => ['book5', 'book6']]
    ];

    public function showUser($id) {

        // die(var_dump($this->users[$id]));

        return view('user_library', ['user' => $this->users[$id]]);

    }
}
