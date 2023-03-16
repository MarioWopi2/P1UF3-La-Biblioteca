<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{


    function index()
    {

        $books = DB::table('books')->get();
        return (view("index", ['books' => $books]));
    }

    function show($id)
    {

        $book = DB::table('books')->find($id);

        if ($book == null) {
            return (view("show", ['entra' => false]));
        }
        return (view("show", ['book' => $book, 'entra' => true]));
    }

    function create()
    {
        return (view("create"));
    }

    function store(Request $request)
    {

        $lastInsertedId = DB::table("books")->max("id");

        DB::table("books")->insert(
            [
                "id" => $lastInsertedId + 1,
                "isbn" => $request->input("isbn"),
                "title" => $request->input("title"),
                "author" => $request->input("author"),
                "published_date" => $request->input("published_date"),
                "description" => $request->input("description"),
                "price" => $request->input("price"),
                "created_at" => now(),
                "updated_at" => now(),
            ]
        );

        return redirect("books/");
    }


    function edit($id)
    {
        $book = DB::table('books')->find($id);

        return (view("edit", ['book' => $book]));
    }

    function update($id, Request $request)
    {
        
        DB::table('books')->where('id', $id)->update([
            'isbn' => $request->input("isbn"),
            'title' => $request->input("title"),
            'author' => $request->input("author"),
            'description' => $request->input("description"),
            'price' => $request->input("price"),
            'updated_at' => now()
        ]);

        return redirect("books/");
    }

    function destroy($id)
    {
        
        DB::table('books')->where('id', $id)->delete();

        return redirect("books/");
    }
    
}
