@extends('layouts.master')
@section('title', "$product->title")
<style>
.single-product{
    padding-top: 5%;
}
</style>
@section('main')
<div class="container text-center my-3 mb-2 single-product">
    <div class="bg-dark text-light w-75 mx-auto
        shadow rounded p-5">
        <h2> {{$product->title ?? 'NULL'}}</h2>
        <div class="alert alert-light">
            product Price <span class="badge bg-success">
                {{$product->price ?? 'NULL'}}</span>
            </div>
        <p>
            {{$product->description ?? 'NULL'}}
        </p>
        <hr>
        <div class="py-4">
            <a href="#" class="btn btn-success mx-1">Edit</a>
            <a href="#" class="btn btn-danger mx-1">Delete</a>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-info">Return to Products</a>
        <a href="{{ route('categories.show', $product->category->id) }}" class="btn btn-warning">Show Related Products</a>
    </div>
</div>
@endsection

