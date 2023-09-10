@extends('layouts.master')
@section('main')

<section class="my-5 container text-center">
    <h2 class="w-50 mx-auto p-3 bg-light shadow">Update product</h2>
    <div class="row mx-auto w-50">
    <form action="{{'/products/' . $product->id}}" method="POST">
@csrf
@method('PUT')
<div class="form-group my-3">
<label for="title">product Title</label>
<input type="text"name="title" class="form-control @error('title') is-invalid @enderror" id="title"
value="{{$product->title}}">
@error('title')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group my-3">
    <label for="price"> Product Price</label>
    <input value="{{ $product->price }}" type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
</div>
<div class="form-group my-3">
<label for="description">product Description</label>
<textarea name="description"  style="height: 200px" id="description"  class="form-control @error('description') is-invalid @enderror">
{{$product->description}}
</textarea>
@error('description')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<input type="submit"value="Update product" class="btn btn-success mt-3">
</form>
</div>
</section>
@endsection


