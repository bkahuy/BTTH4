@extends('welcome')
@section('title', 'quan ly sach')

@section('main')
<div class="container">
    <a href="{{ route('books.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn" style="float: right;">Thêm sách</a>
    <table class="table table-bordered">
        <thead>
        <tr>
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
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->quantity }}</td>
            <td>
                <a href="{{ route( 'books.edit', $book->id) }}"><i class="bi bi-pencil me-3"></i></a>
                <!-- Button trigger modal -->
                <a class="bi bi-trash3 ms-3" data-bs-toggle="modal" data-bs-target="#{{$book->id}}"></a>

                <!-- Modal -->
                <div class="modal fade" id="{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">XOA BAI VIET {{$book->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ban co chac chan muon xoa {{$book->id}} khong
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">huy</button>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">xac nhan</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
