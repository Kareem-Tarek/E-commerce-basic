@extends('layouts.master')
@section('title', 'Categories')
@section('main')
<div class="container text-center my-4 p-5">
    <div class="row">
        <h1 class="mb-5"><u>All Categories</u></h1><br/>
        <p>
            {{-- start => Update Category --}}
            @if(session()->has('successful_category_title_updated'))
                <div class="alert alert-success text-center mx-auto" style="width: 55%; margin-top: 3%;">
                    {{ session()->get('successful_category_title_updated') }}
                </div>
            @elseif(session()->has('successful_category_description_updated'))
                <div class="alert alert-success text-center mx-auto" style="width: 55%; margin-top: 3%;">
                    {{ session()->get('successful_category_description_updated') }}
                </div>
            @elseif(session()->has('successful_category_updated'))
                <div class="alert alert-success text-center mx-auto" style="width: 55%; margin-top: 3%;">
                    {{ session()->get('successful_category_updated') }}
                </div>
            {{-- end => Update Category --}}
            {{-- start => Delete Category --}}
            @elseif(session()->has('category_deleted_successfully'))
                <div class="alert alert-primary text-center mx-auto" style="width: 55%; margin-top: 3%;">
                    {{ session()->get('category_deleted_successfully') }}
                </div>
            {{-- end => Delete Category --}}
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
                        <form action="{{ route('categories.destroy',$category->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-success btn-md p-1 text-white"><i class="fas fa-edit"></i> Edit</a>
                            <button class="btn btn-danger btn-md p-1 text-white" onclick="return confirm('Are you sure that you want to delete - {{ $category->title }}?');" type="submit" title="{{'Delete '."- ($category->title)"}}"><i class="fa-solid fa-trash"></i> Delete </button>
                        </form>
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

