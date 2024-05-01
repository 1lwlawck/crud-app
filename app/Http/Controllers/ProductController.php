<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products' => $products]);

    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'

        ]);

        $newProduct = Products::create($data);

        return redirect(route('products.index'));
    }
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(Products $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'

        ]);
        $product->update($data);

        return redirect(route('products.index'))->with('success', 'Product Updated Succesfully');

    }
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product Deleted Succesfully');

    }

}
