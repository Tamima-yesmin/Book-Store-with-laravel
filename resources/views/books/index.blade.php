@extends('books.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Book Store </h2>
            </div>
            <div style="margin-top: 10px;">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('books.create')}}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
    
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Publisher</th>
            <th>Book Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
            <tr>
            
                <td>{{ $book->bookId }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->book_publisher }}</td>
                <td>{{ $book->book_price }}</td>

                <td>
                    <form action="{{route('books.destroy', $book->id)}}" method="POST">

                        <a href="{{route('books.show', $book->id)}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{route('books.edit', $book->id)}}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection