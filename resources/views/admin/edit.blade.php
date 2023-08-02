@extends('layouts.app')

@section('title', 'Edit Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Edit Comic
            </h1>
        </div>
        <form class="row g-3" action="{{route('admin.update', $comic->id)}}" method="POST">
        @csrf 
        @method('PUT')
            <div class="mb-3 col-6">
                <label for="title" class="form-label">
                    Title
                </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3 col-6">
                <label for="description" class="form-label">
                    Description
                </label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">
                    Thumb
                </label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3 col-6">
                <label for="price" class="form-label">
                    Price
                </label>
                <input type="text" class="form-control" id="price" name="price" aria-label="Amount" value="{{$comic->price}}">
            </div>
            <div class="mb-3 col-6">
                <label for="series" class="form-label">
                    Series
                </label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3 col-6">
                <label for="sale_date" class="form-label">
                    Sale date
                </label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3 col-6">
                <label for="type" class="form-label">
                    Type
                </label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
            <div class="mb-3 col-6">
                <label for="artists" class="form-label">
                    Artists
                </label>
                <input type="artists" class="form-control" id="artists" name="artists" value="{{$comic->artists[0]}}">
            </div>
            <div class="mb-3 col-6">
                <label for="writers" class="form-label">
                    Writers
                </label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers[0]}}">
            </div>
            <button type="submit" class="btn btn-warning btn-lg"  href="{{ route('admin.edit', $comic->id) }}">
                Edit Comic
            </button>
            </form>
        </form>
    </div>
</div>
@endsection