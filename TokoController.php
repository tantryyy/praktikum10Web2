<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class TokoController extends Controller
{
    public function index(){

        return view ('toko/index');
    }

    public function detail(){

        return view('toko/detail');
    }


    public  function admin(){

        $products = product::all();
        return view('toko/admin', compact('products'));
    }

    public function create(){
        return view ('toko/create');
    }


    public function store(request $request)
        {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        product::cretas($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product crated successfully');
    }

    public function edit(product $product)
    {
        return view ('toko/edit', compact('product'));
    }
}
