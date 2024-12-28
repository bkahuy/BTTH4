@extends('welcome')

@section('main')
    <div class="container">
        <h1>Them sach</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ten san pham:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="author">Thong tin chi tiet:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Gia:</label>
                <textarea class="form-control" id="price" name="price" required></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">So luong ton:</label>
                <textarea class="form-control" id="quantity" name="quantity" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">THÊM</button>
        </form>

    </div>
@endsection
