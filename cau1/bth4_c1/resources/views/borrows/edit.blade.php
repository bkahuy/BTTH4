@extends('welcome')

@section('title', 'sua muon sach')
@section('main')
    <div class="container">
        <h1>Chỉnh sửa</h1>

        <form action="{{route('borrows.update', $borrows)}}" method="POST">
            @csrf
            @method('PUT')
            <div class = 'form-group'>
                <label for="name">Tên người mượn</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$borrows->reader->name}}">
            </div>
            <div class="form-group">
                <label for="name">Tên sách mượn</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$borrows->book->name}}">
            </div>
            <div class="form-group">
                <label for="date">Ngày mượn</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$borrows->borrow_date}}">
            </div>
            <div class="form-group">
                <label for="date">Ngày trả</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$borrows->return_date}}">
            </div>
            <div class="form-group">
                <label for="status">Tình trạng</label>
                <div style="display: flex; align-items: center;">
                    <input type="checkbox" class="form-control" id="status" name="status" value="1"
                           style="
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #007bff;
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        "
                        {{ $borrows->status == 1 ? 'checked' : '' }}
                    >
                    <style>
                        #status:checked {
                            background-color: #007bff;
                            border-color: #007bff;
                        }

                        #status:checked::after {
                            content: '\2713'; /* Dấu tick */
                            color: white;
                            display: block;
                            font-size: 14px;
                            text-align: center;
                            line-height: 20px;
                        }
                    </style>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>



@endsection
