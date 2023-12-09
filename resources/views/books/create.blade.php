@extends('books.template')

@section("content")
<div class="row">
    <div class="col-6 h2">Save a new Book </div>
    <div class="col">
        <a class="btn btn-primary" href="{{route("books.index")}}">Return</a>
    </div>
</div>

<form action="{{route("books.store")}}" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="img">URL_Image:</label>
        <input type="text" id="img" name="img" class="form-control" value="{{old("img")}}"/>
        @error('img')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{old("name")}}"/>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="description">Description:</label>
        <textarea type="text" id="description" name="description" class="form-control">{{old("description")}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <button class="btn btn-primary" type="submit">ADD +</button>
    </div>

</form>


@endsection

