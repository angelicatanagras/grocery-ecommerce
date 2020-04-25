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
                    <h3 class="card-title">Customer Information</h3>
                </div>
                <div class="card-body table-responsive p-0">

                    <table class="table table-hover text-nowrap">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                        </tr>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->contact_number}}</td>
                                <td>{{ $customer->email}}</td>
                                <td>
                                    <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">

                                        <a class="far fa-eye m-3"
                                           href="{{ route('customers.show',$customer->id) }}"></a>

                                        <a class="far fa-edit m-3" href="{{ route('customers.edit',$customer->id) }}"></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn"><i class="fas fa-user-minus"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right pt-4 pb-4">
        <a class="btn btn-success" href="{{ route('customers.create') }}">Create New Customer</a>
    </div>


    {!! $customers->links() !!}
@endsection