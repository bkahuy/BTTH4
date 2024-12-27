<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Quản Lý Thư Viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: sans-serif;
        }
        header {
            background-color: #f8f9fa; /* Light gray background */
            padding: 20px;
            border-bottom: 1px solid #dee2e6; /* Subtle border */
        }
        .nav-item {
            margin-right: 20px; /* Spacing between nav items */
        }
        .nav-link {
            color: #343a40; /* Dark gray for links */
        }
        .nav-link:hover {
            color: #007bff; /* Bootstrap blue on hover */
        }
        .nav-link.active {
            font-weight: bold;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #343a40; /* Dark gray background */
            color: white;
            padding: 10px 20px;
            text-align: center; /* Center the footer text */
        }
    </style>
</head>
<body>
<header>
<<<<<<< HEAD
    <div class="container">
        <h2>TRANG QUẢN LÝ THƯ VIỆN</h2>
        <h3>@yield('title')</h3>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Trang quản lý sách</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reads.index') }}">Trang quản lý người đọc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('borrows.index') }}">Trang quản lý mượn sách</a>
            </li>
        </ul>
    </div>
=======
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('books.index') }}">Thư viện</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Sách</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reads.index') }}">Người mượn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('borrows.index') }}">Lịch sử mượn</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
>>>>>>> origin/master
</header>

<main class="container">
    @yield('main')
</main>

<footer>
<<<<<<< HEAD
    <div class="container">
        <p>Đây là footer</p>
    </div>
=======
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <p class="nav-link active"></p>
        </li>

    </ul>
>>>>>>> origin/master
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
