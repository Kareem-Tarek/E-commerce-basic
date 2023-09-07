@extends('layouts.master')
@section('title', 'Ratings')
@section('main')
<div class="container text-center my-5 p-5">
    <div class="row">
        <h1>All Products Ratings</h1><br/>
        @foreach ($ratings as $rating)
            <div class="my-2 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    {{-- <h5 class="card-header shadow"> {{$rating->id}}</h5> --}}
                    <div class="card-body">
                    <h5 class="card-title">
                        ID: {{$rating->id}} <br>
                        Rating Level
                        @if($rating->rating_level == 1)
                            <span class="text-danger">{{ "Poor" }}</span>
                        @elseif($rating->rating_level == 2)
                            <span class="text-warning">{{ "Average" }}</span>
                        @elseif($rating->rating_level == 3)
                            <span class="text-success">{{ "Good" }}</span>
                        @elseif($rating->rating_level == 4)
                            <span class="text-success">{{ "Very Good" }}</span>
                        @else($rating->rating_level == 5)
                            <span class="text-success">{{ "Excellent" }}</span>
                        @endif
                      </h5>
                      <p class="card-text">
                        {{$rating->description ?? 'NULL'}}
                        <hr>
                        Created At {{$rating->created_at}}
                       </p>
                      <a href="{{/* route('ratings.show') , $rating->id */ '#'}}"
                        class="btn btn-primary">show</a>
                      {{-- <a href="{{/* route('ratings.edit',$rating->id) */ '#'}}" class="btn btn-success"></a> --}}
                      <a href="#" class="btn btn-danger">delete</a>
                    </div>
                  </div>
            </div>
        @endforeach
        <div class="my-4">
            {{$ratings->links()}}
        </div>
    </div>
</div>
@endsection

