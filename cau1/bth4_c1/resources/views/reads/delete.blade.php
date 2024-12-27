<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Đọc</title>
    <!-- Kết nối với Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Kết nối với Font Awesome cho các biểu tượng -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <h2 class="text-center">Danh sách Đọc</h2>
    <table class="table table-striped table-bordered mt-4">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Ngày Đọc</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <!-- Giả sử đây là một danh sách các bài đọc -->
        @foreach ($reads as $read)
            <tr>
                <td>{{ $read->id }}</td>
                <td>{{ $read->name }}</td>
                <td>{{ $read->read_date }}</td>
                <td class="text-center">
                    <!-- Nút xóa -->
                    <form action="{{ route('reads.destroy', $read->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm ms-2" title="Xóa">
                            <i class="fas fa-trash-alt"></i> Xóa
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Kết nối với Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
