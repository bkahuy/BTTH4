@extends('welcome')
@section('title', 'Chỉnh sửa mượn sách')

@section('main')
    <div class="container">
        <h1>Chỉnh sửa mượn sách</h1>

        <form action="{{ route('borrows.update', $borrows->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="reader_id">Tên đọc giả</label>
                <select name="reader_id" id="reader_id" class="form-control">
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}" {{ $borrows->reader_id == $reader->id ? 'selected' : '' }}>
                            {{ $reader->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="book_id">Sách</label>
                <select name="book_id" id="book_id" class="form-control">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ $borrows->book_id == $book->id ? 'selected' : '' }}>
                            {{ $book->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <!-- Ngày mượn -->
            <div class="form-group">
                <label for="borrow_date">Ngày mượn</label>
                <input type="date" name="borrow_date" id="borrow_date" class="form-control"
                       value="{{ $borrows->borrow_date }}">
            </div>

            <!-- Ngày trả -->
            <div class="form-group">
                <label for="return_date">Ngày trả</label>
                <input type="date" name="return_date" id="return_date" class="form-control"
                       value="{{ $borrows->return_date }}">
            </div>

            <div class="form-group">
                <label for="status">Tình trạng</label>
                <input type="hidden" name="status" value="0">
                <input type="checkbox" id="status" name="status" value="1" {{ $borrows->status ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
