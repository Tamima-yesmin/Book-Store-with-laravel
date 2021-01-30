@extends('books.layouts')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action=""  method="POST" >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book ID:</strong>
                    <input type="text" name="bookId" class="form-control" placeholder="id" value="{{$books->bookId}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Name</strong>
                    <textarea class="form-control" style="height:50px" name="book_name"
                        placeholder="name">{{$books->book_name}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Publisher</strong>
                    <input type="text" name="book_publisher" class="form-control" placeholder="publisher" value="{{$books->book_publisher}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Price</strong>
                    <input type="number" name="book_price" class="form-control" placeholder="price" value="{{$books->book_price}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            </div>
        </div>

    </form>
@endsection