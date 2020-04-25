<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::latest()->paginate(10);
        return view('products.index', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $product_types = ProductType::all();
        return view('products.create', compact('product_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'details' => 'required',
            'product_type_id' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        $product_types = ProductType::all();
        return view('products.show', compact('product','product_types'));
    }

    public function edit(Product $product)
    {
        $product_types = ProductType::all();
        return view('products.edit', compact('product_types', 'product'));
    }

    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'product_type_id' => 'required'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
