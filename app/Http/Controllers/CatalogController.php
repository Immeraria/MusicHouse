<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index', ['products' => Product::all()]);
    }

    public function show($id)
    {
        return view('catalog.show', ['product' => Product::find($id)]);
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $filename = $request->file('image')->getClientOriginalName();

        $data['image']->move(Storage::path('/public/image/products/'),$filename);

        Product::create([
            'title' => $request->title, 
            'description' => $request->description, 
            'price' => $request->price, 
            'quantity' => $request->quantity, 
            'brand' => $request->brand, 
            'image' => $filename, 
        ]);

        return redirect('/catalog/create');
    }

    public function basket()
    {
        return view('catalog.basket');
    }
}
