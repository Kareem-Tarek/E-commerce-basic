@extends('layouts.master')
@section('title', "$category->title's Products")
@section('main')
<div class="container text-center my-4 p-5">
    <div class="row">
        <h1 class="mb-3"><u>All {{ "(".$category->title."'s)" }} Products</u></h1><br/>
        @forelse ($category->product as $product)
            <div class="my-2 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <h5 class="card-header shadow"> Price is {{$product->price}}</h5>
                    <div class="card-body">
                    <h5 class="card-title">
                        ID: {{$product->id}} <br> {{$product->title}}
                      </h5>
                      <p class="card-text">
                        {{$product->description ?? 'NULL'}}
                        <hr>
                        Created At: {{$product->created_at}}
                       </p>
                      <a href="{{'/products/' . $product->id }}" class="btn btn-primary">show</a>
                      <a href="{{ /* route('products.edit',$product->id) */ "#" }}" class="btn btn-success">Edit</a>
                      <a href="#" class="btn btn-danger">delete</a>
                    </div>
                  </div>
            </div>
        @empty
            <div class="container mt-lg-4 d-flex justify-content-center text-center w-100">
                <span class="alert alert-danger p-2 rounded text-dark">There are no products in this category yet.</span>
            </div>
        @endforelse
        {{-- <div class="my-4">
            {{$category->product->links()}}
        </div> --}}
    </div>
</div>
@endsection
