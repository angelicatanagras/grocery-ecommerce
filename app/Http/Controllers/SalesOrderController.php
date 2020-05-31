<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use App\SalesOrderHeader;
use app\SalesOrderItem;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{

    public function index()
    {
        return view('SalesOrder.index');

    }

    public function create()
    {


        return view('SalesOrder.create');


    }

    public function store(Request $request)
    {
       /* $request->validate([
            //customer
            'product_type_id' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'subtotal' => 'required',
            'total' => 'required',

        ]);*/

        SalesOrderHeader::create($request->all());

        return redirect()->route('SalesOrder.index')
            ->with('success', 'Order created successfully.');

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


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('SalesOrder.create')
            ->with('success', 'Product deleted successfully');
    }
}
