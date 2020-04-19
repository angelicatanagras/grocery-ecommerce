@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Products</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Product Type</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($product as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->product_type->type}}</td>
                                <td>{{ $product->details }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                        <a class="btn btn-primary"
                                           href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <strong>Total Number of Products: </strong>
    <div class="pull-right pt-4 pb-4">
        <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
    </div>


@endsection