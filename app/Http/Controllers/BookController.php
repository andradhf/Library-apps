<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function home() {
        return view('home');
    }
    public function index()
    {
        //menarik semua data dari table books
        $books = DB::table('books')->get();
        //kemudian di lempar ke view
        return view('index', ['books' => $books]);
    }

    public function cari($id)
    {
        //akan mencari data pada table berdasarkan id buku
        $books = DB::table('books')->where('idbuku', $id)->get();
        return view('index', ['books' => $books]);
    }
}
