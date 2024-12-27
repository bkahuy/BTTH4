<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

// Route hiển thị danh sách người đọc
Route::get('reads', [ReaderController::class, 'index'])->name('reads.index');

// Route tạo mới người đọc
Route::get('reads/create', [ReaderController::class, 'create'])->name('reads.create');
Route::post('reads', [ReaderController::class, 'store'])->name('reads.store');

// Route chỉnh sửa người đọc
Route::get('reads/{read}/edit', [ReaderController::class, 'edit'])->name('reads.edit');
Route::put('reads/{read}', [ReaderController::class, 'update'])->name('reads.update');

// Route xóa người đọc
Route::delete('reads/{read}', [ReaderController::class, 'destroy'])->name('reads.destroy');


Route::resource('borrows', BorrowController::class)->except(['show']);
Route::get('borrows/history', [BorrowController::class, 'showHistoryForm'])->name('borrows.history');
Route::post('borrows/history', [BorrowController::class, 'getBorrowsHistory'])->name('borrows.getHistory');





