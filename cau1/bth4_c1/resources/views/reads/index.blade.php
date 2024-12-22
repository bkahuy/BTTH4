@extends('welcome')
@section('title', 'quan ly nguoi doc')

@section('main')
    <h2>danh sach</h2>

    <a href="{{ route('reads.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm người đọc</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên người đọc</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reads as $read)
            <tr>
                <th scope="row">{{ $read->id }}</th>
                <td>{{ $read->name }}</td>
                <td>{{ $read->birthday }}</td>
                <td>{{ $read->address }}</td>
                <td>{{ $read->phone }}</td>
                <td>
                    <a href=""><i class="bi bi-pencil me-3"></i></a>

                    <a href=""><i class="bi bi-trash3 ms-3"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
