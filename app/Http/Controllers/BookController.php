<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    
    public function index()
    {
        $book = Book::all();
        return view('book.index',compact('book'));
    }

    public function create($jdl)
    {
        $book = new Book();
        $book->title = $jdl;
        $book->publisher = "Assalaam studio";
        $book->pages = 100;
        $book->date = carbon::now();
        $book->price = 150000;
        $book->status = false;
        $book->synopsis = "Lorem ipsum";
        $book->save();
        return $book;
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show',compact('book'));
    }
    public function edit($id,$jdl)
    {
        $book = Book::find($id);
        $book->title = $jdl;
        $book->publisher = "Assalaam studio";
        $book->pages = 100;
        $book->date = carbon::now();
        $book->price = 150000;
        $book->status = false;
        $book->synopsis = "Lorem ipsum";
        $book->save();
        return $book;
    }
    public function delete($id)
    {
        $book = Book::find($id);
        $book ->delete();
        return $book;
    }
    public function tampilkan($id){
        $book = Book::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }
    

}
