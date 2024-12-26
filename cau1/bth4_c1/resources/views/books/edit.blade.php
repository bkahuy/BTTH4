@extends('welcome')
@section('title', 'Form sua sach')

@section('main')
    <div class="container">
        <h1>Sua sach</h1>

        <form action="{{ route('books.update', $books) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ten sach:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $books->name }}">
            </div>
            <div class="form-group">
                <label for="author">Tac gia:</label>
                <textarea class="form-control" id="author" name="author" required>{{ $books->author }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">The loai:</label>
                <textarea class="form-control" id="category" name="category">{{ $books->category }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Nam xuat ban:</label>
                <textarea class="form-control" id="year" name="year">{{ $books->year }}</textarea>
            </div>
            <div class="form-group">
                <label for="quantity">So luong ton:</label>
                <textarea class="form-control" id="quantity" name="quantity">{{ $books->quantity }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </div>
@endsection
