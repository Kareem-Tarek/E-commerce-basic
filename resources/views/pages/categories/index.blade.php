@extends('layouts.master')
@section('title', 'Categories')
@section('main')
<div class="container text-center my-5 p-5">
    <div class="row">
        <h1>All Categories</h1><br/>
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
                      <a href="{{/* route('categories.show') , $category->id */ '#'}}"
                        class="btn btn-primary">show</a>
                      <a href="{{/* route('categories.edit',$category->id) */ '#'}}" class="btn btn-success">update</a>
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

