<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data['buku']= [
            [
                'judul' => 'HTML',
                'halaman'=> 125,
                'penulis'=> 'John',
            ],
            [
                'judul' => 'PGSQL',
                'halaman'=> 400,
                'penulis'=> 'YTTA',
            ],
        ];
        return view('books.index', $data);
    }
}
