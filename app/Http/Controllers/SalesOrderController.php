<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{

    public function index()
    {
        $customer = Customer::all();
        $product = Product::all();
        return view('SalesOrder.index', compact('customer','product_name'));
    }


    public function create()
    {
        $customer = Customer::all();
        $product = Product::all();
        return view('SalesOrder.create', compact('customer','product_name'));
    }


    public function store(Request $request)
    {
        //
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
