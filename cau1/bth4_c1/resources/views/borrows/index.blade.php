@extends('welcome')
@section('title', 'quan ly muon sach')

@section('main')
    <h2>danh sach</h2>

    <a href="{{ route('borrows.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm mượn sách</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên người mượn</th>
            <th scope="col">Tên sách mượn</th>
            <th scope="col">Ngày mượn</th>
            <th scope="col">Ngày dự kiến trả</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($borrows as $borrow)
            <tr>
                <th scope="row">{{ $borrow->id }}</th>
                <td>{{ $borrow->reader->name }}</td>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date }}</td>
                <td>{{ $borrow->status }}</td>
                <td>
                    <a href="{{ route('borrows.edit', $borrow->id) }}"><i class="bi bi-pencil me-3"></i></a>
                    <a href=""><i class="bi bi-trash3 ms-3"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
