<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('page.buku.index');
    }
    public function create()
    {
        return view('page.buku.create');
    }
}

?>