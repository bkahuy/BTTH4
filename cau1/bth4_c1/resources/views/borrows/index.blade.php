@extends('welcome')
@section('title', 'quan ly muon sach')

@section('main')
<div style="float: right">
    <a href="{{ route('borrows.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm mượn sách</a>
    <a href="{{ route('borrows.history') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Lịch sử mượn sách của độc giả</a>
</div>
    <table class="table">
        <thead>
        <tr>
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
                <td>{{ $borrow->reader->name }}</td>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date }}</td>
                <td>{{ $borrow->status == 1 ? 'Đã trả' : 'Chưa trả' }}</td>

                <td>
                    <a href="{{ route('borrows.edit', $borrow->id) }}"><i class="bi bi-pencil me-3"></i></a>
                    <a class="bi bi-trash3 ms-3" data-bs-toggle="modal" data-bs-target="#{{$borrow->id}}"></a>
                    <div class="modal fade" id="{{$borrow->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">XÓA ID MƯỢN {{$borrow->id}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn chắc chắn muốn xóa không?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">OK</button>

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
@endsection
