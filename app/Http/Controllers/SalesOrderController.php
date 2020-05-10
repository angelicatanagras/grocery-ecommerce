<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{

    public function index()
    {
        return view('SalesOrder.index');

    }

    public function create()
    {

        $product_types = Product::all();
        return view('SalesOrder.create');




    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        return view('SalesOrder.show', compact('customer','product_name'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
