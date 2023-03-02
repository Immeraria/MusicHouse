<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index');
    }

    public function show()
    {
        return view('catalog.show');
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function basket()
    {
        return view('catalog.basket');
    }
}
