@extends('welcome')

@section('title', 'Lịch sử mượn trả sách')

@section('main')
    <div class="container">
        <h1>Lịch sử mượn trả của độc giả</h1>

        <form action="{{ route('borrows.getHistory') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="reader_id">Chọn độc giả:</label>
                <select name="reader_id" id="reader_id" class="form-control">
                    <option value="">-- Chọn người đọc --</option>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>

        @isset($borrows)
            <h3>Lịch sử mượn sách của {{ $reader->name }}</h3>
            <table class="table">
                <thead>
                <tr>
                    <th>Sách</th>
                    <th>Ngày mượn</th>
                    <th>Ngày trả</th>
                    <th>Tình trạng</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->book->name }}</td>
                        <td>{{ $borrow->borrow_date }}</td>
                        <td>{{ $borrow->return_date ? $borrow->return_date : 'Chưa trả' }}</td>
                        <td>{{ $borrow->status ? 'Đã trả' : 'Chưa trả' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endisset
    </div>
@endsection
