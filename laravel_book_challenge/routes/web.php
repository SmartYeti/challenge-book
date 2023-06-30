<?php

use Illuminate\Support\Facades\Route;
use App\Book;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    $books = Book::findAll();
    return view('get_books', ['books' => $books]);
});

Route::get('/books/{id}', function ($id) {
    $book = Book::findById($id);
    return view('id_search', ['book' => $book]);
    // return response()->json($book);
});

