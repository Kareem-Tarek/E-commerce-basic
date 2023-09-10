@extends('layouts.master')
@section('main')

<section class="my-5 container text-center">
    <h2 class="w-50 mx-auto p-3 bg-light shadow">Update Product ({{ $product->title }})</h2>
    <div class="row mx-auto w-50">
    <form action="{{'/products/' . $product->id}}" method="POST">
@csrf
@method('PUT')
<div class="form-group my-3">
    <label for="title">Title</label>
    <input type="text"name="title" class="form-control @error('title') is-invalid @enderror" id="title"
    value="{{$product->title ?? old('title')}}">
    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group my-3">
    <label for="price">Price</label>
    <input value="{{ $product->price ?? old('price') }}" type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
    @error('price')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group my-3">
    <label for="description">Description</label>
    <textarea name="description"  style="height: 200px" id="description"  class="form-control @error('description') is-invalid @enderror">
    {{$product->description ?? ''}}
    </textarea>
    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group my-3">
    <label for="title">Available Quantity</label>
    <input type="number" name="available_quantity" class="form-control @error('available_quantity') is-invalid @enderror" id="available_quantity"
    value="{{$product->available_quantity ?? old('available_quantity')}}">
    @error('available_quantity')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div>
    <label for="title">Category</label>
    <select name="category_id" class="form-control select border-1 border-dark mb-2 @error('category_id') is-invalid @enderror" value="{{$category->id ?? old('category_id')}}">
        <option value="" selected> ---------- Select a Category ---------- </option>
        {{-- @inject('categories', 'App\Models\Category') --}}
        @forelse($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                ({{ ucfirst($category->title) }})
            </option>
            @empty
            No Categories Found!
        @endforelse
    </select>
    @error('category_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<input type="submit"value="Update Product" class="btn btn-success mt-3">
</form>
</div>
</section>
@endsection
