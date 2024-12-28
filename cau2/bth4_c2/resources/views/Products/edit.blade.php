@extends('welcome')

@section('main')
    <div class="container">
        <h1>Sua san pham</h1>

        <form action="{{ route('products.update', $products) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ten san pham:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}">
            </div>
            <div class="form-group">
                <label for="description">Thong tin chi tiet:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $products->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Gia:</label>
                <textarea class="form-control" id="price" name="price">{{ $products->price }}</textarea>
            </div>
            <div class="form-group">
                <label for="quantity">So luong ton:</label>
                <textarea class="form-control" id="quantity" name="quantity">{{ $products->quantity }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </div>
@endsection
