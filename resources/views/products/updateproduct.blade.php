@extends('layouts.layout')

@section('content')
    <div class="col-md-12 mt-3">
        <h4>UPDATE PRODUCT</h4>
    </div>

    @if (session()->has("status"))
        <div class="alert alert-success" role="alert">
            {{session("status")}}
        </div>
    @endif

    <form method="POST" class="col-md-6">

        @CSRF

        <div class="mb-3">
            <input class="form-control" 
            type="text" 
            name="product_title" 
            id="product_title" 
            placeholder="Product Name" 
            value="{{$product->product_title}}">
            @error('product_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control" 
            type="text" 
            name="product_content" 
            id="product_content" 
            placeholder="Product Description" 
            value="{{$product->product_content}}">
            @error('product_content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control" 
            type="number" 
            name="product_price" 
            id="product_price" 
            placeholder="Product Price"
            value="{{$product->product_price}}">
            @error('product_price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control" 
            type="text" 
            name="product_pic" 
            id="product_pic" 
            placeholder="Product Pic Path like images/..... .jpg"
            value="{{$product->product_pic}}">
        </div>
        <div class="mb-3 text-center">
            <input class="btn btn-primary" type="submit" value="Update Product">
        </div>
    </form>
@endsection