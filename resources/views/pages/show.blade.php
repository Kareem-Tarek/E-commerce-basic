@extends('layouts.master')
@section('title' , 'Product Page')
@section('main')
    <div class="container text-center my-3 mb-2 ">
        <div class="bg-dark text-light w-75 mx-auto
            shadow rounded p-5">
            <h2> {{$product->title}}</h2>
            <div class="alert alert-light">
                product Price <span class="badge bg-success">
                    {{$product->price}}</span>
                </div>
            <p>
                {{$product->description}}
            </p>
            <hr>
            <div class="py-4">
                <a href="#" class="btn btn-success mx-1">Update</a>
                <a href="#" class="btn btn-danger mx-1">Delete</a>
            </div>
            <a href="{{('product')}}" class="btn btn-info">
                Return to Products
            </a>
        </div>
    </div>
@endsection
