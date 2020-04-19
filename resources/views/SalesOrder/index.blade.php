@extends('SalesOrder.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb pb-2">

            <div class="pull-left">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="{{ route('SalesOrder.index') }}">Back to Home</a></li>
                    <li class="breadcrumb-item active">Order List</li>
                </ol>

            </div>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Transaction Details</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12 pb-3">
                        <a href="{{ route('SalesOrder.create') }}">
                        <button type="submit"  class="btn btn-primary">Create new transaction</button></a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Total Ordered Items</th>
                            <th>Payment Type</th>
                            <th>Order Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>001</td>
                            <td>Jane Doe</td>
                            <td>5</td>
                            <td>Cash</td>
                            <td>CONFIRMED</td>
                            <td>
                                <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                    <a class="btn btn-info"
                                       href="http://127.0.0.1:8000/customers/3/edit">Show</a>
                                    <a class="btn btn-primary"
                                       href="http://127.0.0.1:8000/customers/3/edit">Edit</a>
                                    <input type="hidden" name="_token"
                                           value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g"> <input type="hidden"
                                                                                                    name="_method"
                                                                                                    value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Jane Doe</td>
                            <td>5</td>
                            <td>Cash</td>
                            <td>PENDING</td>
                            <td>
                                <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                    <a class="btn btn-info"
                                       href="http://127.0.0.1:8000/customers/3/edit">Show</a>
                                    <a class="btn btn-primary"
                                       href="http://127.0.0.1:8000/customers/3/edit">Edit</a>

                                    <input type="hidden" name="_token"
                                           value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g"> <input type="hidden"
                                                                                                    name="_method"
                                                                                                    value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Jane Doe</td>
                            <td>5</td>
                            <td>Cash</td>
                            <td>DELIVERED</td>
                            <td>
                                <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                    <a class="btn btn-info"
                                       href="http://127.0.0.1:8000/customers/3/edit">Show</a>
                                    <a class="btn btn-primary"
                                       href="http://127.0.0.1:8000/customers/3/edit">Edit</a>

                                    <input type="hidden" name="_token"
                                           value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g"> <input type="hidden"
                                                                                                    name="_method"
                                                                                                    value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>Jane Doe</td>
                            <td>5</td>
                            <td>Cash</td>
                            <td>PENDING</td>
                            <td>
                                <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                    <a class="btn btn-info"
                                       href="http://127.0.0.1:8000/customers/3/edit">Show</a>
                                    <a class="btn btn-primary"
                                       href="http://127.0.0.1:8000/customers/3/edit">Edit</a>

                                    <input type="hidden" name="_token"
                                           value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g"> <input type="hidden"
                                                                                                    name="_method"
                                                                                                    value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>Jane Doe</td>
                            <td>5</td>
                            <td>Cash</td>
                            <td>PENDING</td>
                            <td>
                                <form action="http://127.0.0.1:8000/customers/3" method="POST">
                                    <a class="btn btn-info"
                                       href="http://127.0.0.1:8000/customers/3/edit">Show</a>
                                    <a class="btn btn-primary"
                                       href="http://127.0.0.1:8000/customers/3/edit">Edit</a>
                                    <input type="hidden" name="_token" value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection