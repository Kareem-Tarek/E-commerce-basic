@extends('layouts.master')
@section('title', 'Categories')
@section('main')
<div class="container text-center my-5 p-5">
    <div class="row">
        <h1 class="mb-5"><u>All Categories</u></h1><br/>
        <p>
            @if(session()->has('successful_category_updated'))
                <div class="alert alert-success text-center mx-auto" style="width: 55%; margin-top: 3%;">
                    {{ session()->get('successful_category_updated') }}
                </div>
            @endif
        </p>
        @foreach ($categories as $category)
            <div class="my-2 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">
                        ID: {{$category->id}} <br> {{$category->title}}
                      </h5>
                      <p class="card-text">
                        {{$category->description ?? 'NULL'}}
                        <hr>
                        Created At {{$category->created_at}}
                    </p>
                        <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </div>
                    </div>
            </div>
        @endforeach
        <div class="my-4">
            {{$categories->links()}}
        </div>
    </div>
</div>
@endsection

