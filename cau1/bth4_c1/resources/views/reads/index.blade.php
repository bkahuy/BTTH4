@extends('welcome')
@section('title', 'quan ly doc gia')

@section('main')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh sách người đọc</h2>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('reads.create') }}" class="btn btn-success font-weight-bold">
                <i class="fas fa-user-plus me-2"></i>Thêm người đọc
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>

                <th scope="col">Tên người đọc</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col" class="text-center">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reads as $read)
                <tr>

                    <td>{{ $read->name }}</td>
                    <td>{{ $read->birthday }}</td>
                    <td>{{ $read->address }}</td>
                    <td>{{ $read->phone }}</td>
                    <td class="text-center">
                        <!-- Nút sửa (Chưa có action ở đây) -->
                        <a href="{{ route('reads.edit', $read->id) }}" class="btn btn-warning btn-sm me-2" title="Sửa">
                            <i class="bi bi-pencil me-3"></i>
                        </a>

                        <!-- Nút xóa -->
                        <form action="{{ route('reads.destroy', $read->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm ms-2" title="Xóa">
                                <i class="bi bi-trash3 ms-3"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
