@extends('welcome')
@section('title', 'Form them sach')

@section('main')
    <div class="container">
        <h1>Them sach</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ten sach:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="author">Tac gia:</label>
                <textarea class="form-control" id="author" name="author" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">The loai:</label>
                <textarea class="form-control" id="category" name="category" required></textarea>
            </div>
            <div class="form-group">
                <label for="year">Nam xuat ban:</label>
                <textarea class="form-control" id="year" name="year" required></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">So luong ton:</label>
                <textarea class="form-control" id="quantity" name="quantity" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">THÊM</button>
        </form>

    </div>
@endsection
