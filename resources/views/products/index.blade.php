@extends('layouts.layout')


@section('content')
{{-- @php
    dd($products);
    @endphp --}}
    <div class="container d-flex justify-content-between mt-5">
        <h2>PRODUCTS</h2>
        <a href="{{route("addproduct")}}" class="button btn btn-success pull-right">Add Product</a> 
    </div>
    <hr>
    <div class="card-deck row">
        @foreach ($products as $product)
        <div class="col col-sm-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top mb-1" src="{{$product->product_pic}}" alt="Card image cap">
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title mb-1">{{$product->product_title}}</h5>
                    <p class="card-text">{{$product->product_content}}</p>
                    <h5 class="card-footer d-flex justify-content-end">{{$product->product_price}} $</h5>
                    <div class="d-flex justify-content-center">
                        <a href="{{route("updateproduct",["id"=>$product->id])}}" class="btn btn-primary m-3">Edit</a>
                        <a href="{{route("deleteproduct",["id"=>$product->id])}}" class="btn btn-danger m-3">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection