<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cat;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(3);
        return view('books.index',[
            'books'=>$books

        ]);
    }

    public function show($id)
    {
        //SELECT * FROM cats WHERE id = $id;
        $book =  Book::findorFail($id);
        return view('books.show',[
            'book'=>$book
        ]);
    }


}
