@extends("books.template")

@section("content")
<div class="row">
    <div class="col-6 h2">
        View Description about The Book
    </div>
    <div class="col">
        <a class="btn btn-primary" href="{{route('books.index')}}">Return</a>
    </div>
</div>
<div class="row">
    <div class="col-1 h5">Image:</div>
    <div class="col">
        <img src="{{ $book->img }}" style="height: 25; width: 50;" />
    </div>
</div>
<div class="row">
    <div class="col-1 h5">Name:</div>
    <div class="col">{{$book->name}}</div>
</div>
<div class="row">
    <div class="col-1 h5">Description:</div>
    <div class="col">{{$book->description}}</div>
</div>
@endsection
