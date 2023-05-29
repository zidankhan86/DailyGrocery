@extends('frontend.index')
@section('content')



<style>

    body{
        background-color: #edf1f5;
        margin-top:20px;
    }
    .card {
        margin-bottom: 30px;
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }
    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #8898aa;
    }
    .table-product.table-striped tbody tr:nth-of-type(odd) {
        background-color: #f3f8fa!important
    }
    .table-product td{
        border-top: 0px solid #dee2e6 !important;
        color: #728299!important;
    }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <br><br><br><br><div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Product: {{ $product->product_name }}</h3>
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img height="550px" width="350px" src="{{ url('/uploads/uploads/'.$product->image) }}" class="img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Product description</h4>
                        <p>{{ $product->details }}</p>
                        <h2 class="mt-5">
                        Price - {{ $product->price }} Tk /BDT
                        </h2>

                        <h4 class="box-title mt-5">Shop</h4>
                        <p>{{ $product->shop_name }}</p>

                        <h4 class="box-title mt-5">Quantity Remain</h4>
                        <p>{{ $product->quantity }}</p>

                        <a href="{{route ('place.order',$product->id) }}" class="btn btn-info btn-rounded"> Buy Now </a>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
