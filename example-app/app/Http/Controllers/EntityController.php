<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntityController extends Controller
{
    //
    protected $books = [
        'book1', 'book2', 'book3'
    ];

    public function index(){

        return view('books', ['books' => $this->books]);

    }

    public function delete($id) {

        if (array_key_exists($id, $this->books)) {
            unset($this->books[$id]);
        }

        return view('books', ['books' => $this->books]);

    }

    public function store(Request $request) {

        if ($request->book_title) {
            $this->books[] = $request->book_title;
        }

        return view('books', ['books' => $this->books]);

    }
}
