@extends("books.template")


@section("content")
<div class="row">
    <div class="col-6 h2">Update Book</div>
    <div class="col">
        <a href="{{route('books.index')}}" class="btn btn-primary">Return</a>
    </div>
</div>
<form action="{{route("books.update",$book)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <label for="img">URL_Image:</label>
        <input type="text" id="img" name="img" class="form-control" value="{{$book->img}}"/>
        @error('img')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{$book->name}}"/>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="description">Description:</label>
        <textarea type="text" id="description" name="description" class="form-control" >{{$book->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <button class="btn btn-primary" type="submit">Validate</button>
    </div>

</form>
