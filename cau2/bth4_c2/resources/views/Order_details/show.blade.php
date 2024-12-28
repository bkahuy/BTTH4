@extends('welcome')
@section('main')
    <div class="container">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Số lượng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($info as $infos)
                <tr>
                    <td style="max-width: 800px">{{ $infos->name }}</td>
                    <td>{{ $infos->quantity }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
