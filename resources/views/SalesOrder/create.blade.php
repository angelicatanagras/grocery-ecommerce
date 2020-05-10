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
                                        <strong>Order no:</strong>
                                        <input type="number" name="orderNo" class="form-control" placeholder="Order-00"
                                               disabled="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Customer Name:</label>
                                        <input list="customerNameList" class="typeahead form-control" id="name"
                                               name="name"/>
                                        <datalist id="customerNameList"></datalist>
                                        <input type="hidden" name="customer" id="customerNameList-hidden">
                                        {{ csrf_field() }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Delivery Address:</strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" id="deliveryCheck" class="form-check-input"
                                                       id="exampleCheck1">
                                                <p><i>Same with Customer Address?</i></p>
                                            </div>

                                        </div>
                                        <textarea class="form-control" style="height:100px" name="details"
                                                  id="deliveryAddress"
                                                  placeholder="Delivery Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Contact Number:</strong>
                                        <input type="text" name="name" id="contactNumber" class="form-control"
                                               placeholder="+639">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="product-name">Product Name:</label>
                                        <input list="productNameList" class="typeahead form-control" id="product-name"
                                               name="product-name"/>
                                        <datalist id="productNameList"></datalist>
                                        <input type="hidden" name="customer" id="productNameList-hidden">
                                        {{ csrf_field() }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Quantity:</strong>
                                        <input type="number" name="name" id="quantity" class="form-control"
                                               placeholder="1">
                                    </div>
                                    <div class="form-group">
                                        <strong>Price:</strong>
                                        <input type="number" name="name" id="price" class="form-control"
                                               placeholder="P0.00"
                                               disabled="">
                                    </div>
                                    <div class="form-group">
                                        <strong>Sub-total:</strong>
                                        <input type="number" name="name" id="subtotal" class="form-control"
                                               placeholder="P0.00">
                                    </div>
                                    <div class="form-group">
                                        <strong>Total:</strong>
                                        <input type="number" name="name" id="total" class="form-control"
                                               placeholder="P0.00"
                                               disabled="">
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
                                        <a class="far fa-edit m-3"
                                           href="http://127.0.0.1:8000/customers/3/edit"></a>
                                        <input type="hidden" name="_token"
                                               value="6GWAQPfOMLwUG9MjK1lzwrz8q5qrsX8vd6Izws7g">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan="3"></td>
                                <td class="align-right"><i> VAT Amount : </i></td>
                                <td id="total-vat" class="align-right"> 0.00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3"></td>
                                <td class="align-right"><i> Total Gross Amount: </i></td>
                                <td id="total-gross" class="align-right"> 0.00</td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <a href="{{ route('SalesOrder.index') }}">
                <button type="submit" class="btn btn-primary">Confirm Order</button>
            </a>

        </div>
    </form>

@stop

@section('scripts')
    <script type="text/javascript">

        /*
         * For Customer textbox autocomplete
         */
        $(document).ready(function () {
            $('#name').on('keyup', function () {
                var query = $(this).val();
                //console.log(query)
                $.ajax({
                    url: "{{ route('customers.search') }}",
                    type: "GET",
                    dataType: "json",
                    data: {'name': query},
                    success: function (data) {
                        $('#customerNameList').empty();
                        $.each(data, function (index) {
                            $('#customerNameList').append("<option data-value='" + data[index].id + "'>" + data[index].name + "</option>");
                        });
                    }
                })
            });

            $(document).on('change', 'input', function () {
                var options = $('#customerNameList')[0].options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].value == $(this).val()) {
                        $('#customerNameList-hidden').val(options[i].dataset.value);
                        var url = '/get_details/customer/' + customer_id;
                        $.ajax({
                            url: url,
                            type: "GET",
                            dataType: "json",
                            // data: {'id': customer_id},
                            success: function (data) {
                                $('#deliveryAddress').append(data.address);
                            }
                        })
                        break;
                    }
                }
            });

            $("#deliveryCheck").change(function () {
                var customer_id = $('#customerNameList-hidden').val();
                if ($(this).is(':checked')) {
                    var url = '/get_details/customer/' + customer_id;
                    $.ajax({
                        url: url,
                        type: "GET",
                        dataType: "json",
                        // data: {'id': customer_id},
                        success: function (data) {
                            $('#deliveryAddress').append(data.address);
                            $("#contactNumber").val(data.contact_number).append(data);
                            $('#contactNumber').focus();

                        }
                    })
                } else if ($(this).is(':not(:checked)')) {
                    $('#deliveryAddress').empty();
                    $("#contactNumber").val(null); //null for the meantime
                }

            });
        });


        /*
        * For PRODUCTS textbox autocomplete
        * */
        $(document).ready(function () {

            $('#product-name').on('keyup', function () {
                var query = $(this).val();
                // console.log(query)
                $.ajax({
                    url: "{{ route('products.search') }}",
                    type: "GET",
                    dataType: "json",
                    data: {'product-name': query},
                    success: function (data) {
                        $('#productNameList').empty();
                        $.each(data, function (index) {
                            $('#productNameList').append("<option data-value='" + data[index].id + "'>" + data[index].name + "</option>");
                        });
                        // $('#customerNameList').html(data);
                    }
                })
            });

            $(document).on('change', 'input', function () {
                var options = $('#productNameList')[0].options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].value == $(this).val()) {
                        $('#productNameList-hidden').val(options[i].dataset.value);
                        var url = '/get_details/product/' + product_id;
                        $.ajax({
                            url: url,
                            type: "GET",
                            dataType: "json",
                            // data: {'id': customer_id},
                            success: function (data) {
                                $('#price').append(data.price);
                                console.log(data)
                            }
                        })
                        break;
                    }
                }
            });
        });

    </script>

@stop
