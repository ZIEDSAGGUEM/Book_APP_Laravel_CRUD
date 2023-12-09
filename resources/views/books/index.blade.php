@extends("books.template")

@section("content")
<div class="row">
    <div class="col-6">
        <h2>Gestion de Books</h2>
    </div>
    <div class="col">
        <a class="btn btn-success" href="{{route("books.create")}}">Add a new Book</a>
    </div>
</div>
@if(session()->has('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif

<div class="row">
    <table class="table table-striped">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="3" class="col-3">Action</th>
        </tr>
@foreach ( $books as $book )
<tr>
    <td><img src="{{ $book->img }}" alt="Book Image"></td>
    <td>{{$book->name}}</td>
    <td>{{$book->description}}</td>
    <td><a class="btn btn-primary" href="{{route("books.show",$book)}}">Look</a></td>
    <td><a class="btn btn-warning" href="{{route("books.edit",$book)}}">Update</a></td>
    <td>
        <form action="{{route('books.destroy',$book)}}" method="POST" onsubmit="return confirm("Are You Sure to Delete this book ?"),">
            @csrf
            @method('DELETE')
            <button type="buttom" class="btn  btn-danger">DELETE</button>
        </form>
    </td>
</tr>


@endforeach
</table>
</div>
