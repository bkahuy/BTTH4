@extends('welcome')
@section('title', 'quan ly sach')

@section('main')
    <h2>danh sach</h2>

    <a href="{{ route('books.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm sách</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Thể loại sách</th>
            <th scope="col">Năm xuất bản</th>
            <th scope="col">Số lượng bản sao</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->quantity }}</td>
            <td>
                <a href=""><i class="bi bi-pencil me-3"></i></a>
                <a href=""><i class="bi bi-trash3 ms-3"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
