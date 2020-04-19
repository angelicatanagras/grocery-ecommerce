@extends('SalesOrder.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb pb-2">

            <div class="pull-left">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="{{ route('SalesOrder.index') }}">Back to Home</a></li>
                    <li class="breadcrumb-item active">Order Form</li>
                </ol>

            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your order.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('SalesOrder.store') }}" method="POST">
        @csrf
        <div class="row pb-3">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Order Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Customer Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Delivery Address:</strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <p><i>Same with Customer Address?</i></p>
                                            </div>

                                        </div>
                                        <textarea class="form-control" style="height:100px" name="details"
                                                  placeholder="Delivery Address"></textarea>
                                   </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Contact Number:</strong>
                                        <input type="number" name="name" class="form-control" placeholder="+639">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Product Name:</strong>
                                        <input type="name" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <strong>Quantity:</strong>
                                        <input type="number" name="name" class="form-control" placeholder="1">
                                    </div>
                                    <div class="form-group">
                                        <strong>Price:</strong>
                                        <input type="number" name="name" class="form-control" placeholder="P0.00">
                                    </div>
                                    <div class="form-group">
                                        <strong>Sub-total:</strong>
                                        <input type="number" name="name" class="form-control" placeholder="P0.00">
                                    </div>
                                    <div class="form-group">
                                        <strong>Total:</strong>
                                        <input type="number" name="name" class="form-control" placeholder="P0.00">
                                    </div>
                                    <div class="form-group">
                                        <strong>Payment Type:</strong>
                                        <select id="product_type" name="product_type_id" class="form-control select2"
                                                style="width: 100%;">
                                            <option>Cash on Delivery</option>
                                            <option>Online Banking</option>
                                            <option>Gcash</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right">Save</button>
                                        <button type="submit" class="btn btn-primary ">Add more products</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Order Information</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <tbody>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th></th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Rice</td>
                                <td>2</td>
                                <td>50.00</td>
                                <td></td>
                                <td>100.00</td>
                                <td>
                                    <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                        <a class="btn btn-primary"
                                           href="http://127.0.0.1:8000/customers/3/edit">Edit</a>
                                        <input type="hidden" name="_token"
                                               value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g">
                                        <input type="hidden" name="_method"  value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Milk</td>
                                <td>3</td>
                                <td>100.00</td>
                                <td></td>
                                <td>300.00</td>
                                <td>
                                    <form action="http://127.0.0.1:8000/customers/2" method="POST">
                                        <a class="btn btn-primary" href="http://127.0.0.1:8000/customers/2/edit">Edit</a>
                                        <input type="hidden" name="_token" value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g">
                                        <input type="hidden"  name="_method"  value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Soap</td>
                                <td>1</td>
                                <td>40.00</td>
                                <td></td>
                                <td>40.00</td>
                                <td>
                                    <form action="http://127.0.0.1:8000/customers/1" method="POST">
                                        <a class="btn btn-primary" href="http://127.0.0.1:8000/customers/1/edit">Edit</a>
                                        <input type="hidden" name="_token"value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g">
                                        <input type="hidden"  name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3"> </td>
                                <td class="align-right"><i> VAT Amount : </i></td>
                                <td id="total-vat" class="align-right"> 0.00 </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3"> </td>
                                <td class="align-right"><i> Total Gross Amount: </i></td>
                                <td id="total-gross" class="align-right"> 0.00 </td>
                                <td> </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <a href="{{ route('SalesOrder.index') }}">
            <button type="submit" class="btn btn-primary">Confirm Order</button></a>

        </div>
    </form>
@endsection