<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller {

    public function index($id = null) {

        return view('new_book',  ['book' => $id ? Book::where('id', $id)->first() : null]);

    }

    public function store(Request $request)  {

        $book = new Book($request->all());

        $request->validate([
            'title' => ['required', 'max:250', 'unique:books'],
            'author' => ['required', 'max:100'],
            'genre' => ['required', 'min:5'],
        ]);

        $book->save();

        return Redirect::route('book-form', ['id' => $book->id]);

    }
   
}
