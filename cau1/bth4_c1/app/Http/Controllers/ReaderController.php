<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    // Hiển thị danh sách độc giả
    public function index()
    {
        $reads = Reader::all();
        return view('reads.index', compact('reads'));
    }

    // Hiển thị form thêm mới
    public function create()
    {
        return view('reads.create');
    }

    // Xử lý thêm mới độc giả
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Reader::create($validated);

        return redirect()->route('reads.index')->with('success', 'Độc giả được thêm mới thành công!');
    }

    // Hiển thị form chỉnh sửa
    public function edit($id)
    {
        $reader = Reader::findOrFail($id);
        return view('reads.edit', compact('reader'));
        return redirect()->route('reads.index')->with('success', 'Độc giả được thêm mới thành công!');
    }

    // Xử lý chỉnh sửa thông tin độc giả
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $reader = Reader::findOrFail($id);
        $reader->update($validated);

        return redirect()->route('reads.index')->with('success', 'Thông tin độc giả được cập nhật thành công!');
    }

    // Xử lý xóa độc giả
    public function destroy($id)
    {
        $reader = Reader::findOrFail($id);
        $reader->delete();

        return redirect()->route('reads.index')->with('success', 'Độc giả đã được xóa thành công!');
    }
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
