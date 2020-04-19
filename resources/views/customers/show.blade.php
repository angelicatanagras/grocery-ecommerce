@extends('customers.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Essential</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">  
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Customer Name:</strong>
                        {{ $customer->name}}
                    </div>
                    <div class="form-group">
                    <strong>Contact Number:</strong>
                        {{ $customer->contact_number}}
                    </div>                   
                </div> 
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        {{ $customer->address}}
                </div>  
                <div class="form-group">
                        <strong>Email Address:</strong>
                        {{ $customer->email}}
                </div>     
            </div>
        </div>
   </div>
@endsection