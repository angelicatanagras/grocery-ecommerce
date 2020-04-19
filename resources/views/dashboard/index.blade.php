@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">All Items</h3>
            </div>
                <div class="row p-3">
                    <div class="col-sm-6">
                        <div class="form-group">

                                <select id="product_type" class="form-control select2" style="width: 100%;">
                                    <option>Food</option>
                                    <option>Beverages</option>
                                    <option>Essentials</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Search by name">
                    </div>
                </div>
                
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Product Name</th>
                                <th>Brand Name</th>
                            </tr>
                            @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->detail }}</td>
                            </tr>
                           
                            @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>

{!! $foods->links() !!}

@endsection