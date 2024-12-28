@extends('welcome')
@section('main')
    <div class="container">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order_details as $order_detail)
                <tr>
                    <td>{{ $order_detail->order_id }}</td>
                    <td style="max-width: 800px">{{ $order_detail->product_id }}</td>
                    <td>{{ $order_detail->quantity }}</td>
                    <td >
                        <a href="{{ route( 'order_details.show', $order_detail->id) }}"><i class="bi bi-eye me-3"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
