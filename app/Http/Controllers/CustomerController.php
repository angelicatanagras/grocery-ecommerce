<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::latest()->paginate(5);
  
        return view('customers.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        //
        return view('customers.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email'=>'required'
        ]);
  
        Customer::create($request->all());
   
        return redirect()->route('customers.index')
                        ->with('success','Customer created successfully.');
    }

    public function show(Customer $customer)
    {
        //
        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer)
    {
        //
        return view('customers.edit',compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        //
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email'=>'required'
        ]);
  
        $customer->update($request->all());
   
        return redirect()->route('customers.index')
                        ->with('success','Customer updated successfully.');

    }

    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
  
        return redirect()->route('customers.index')
                        ->with('success','Customer deleted successfully');
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            $data = Customer::where('name', 'LIKE', $request->name.'%')
                ->get();
        }

        /*
         * Fetch data from Customer Model
         * Converts and returns as JSON
         * */

        return $data->toJson();
    }

    public function getDetails($id)
    {
        $data = Customer::find($id);
        return $data->toJson();

    }
}
