<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Reader;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::all();
        return view('borrows.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.add', compact('readers', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after:borrow_date',
        ]);
        $validate['status'] = 0;
        Borrow::create($validate);
        return redirect()->route('borrows.index')->with('success', 'Add success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $borrows = Borrow::find($id);
        return view('borrows.show', compact('borrows'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $borrows = Borrow::find($id);
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.edit', compact('borrows', 'readers', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after:borrow_date',
            'status' => 'required|boolean',
        ]);
        $borrows = Borrow::findOrFail($id);
        $borrows->update($validate);
        return redirect()->route('borrows.index')->with('success', 'Update success');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $borrows = Borrow::find($id);
        $borrows->delete();
        return redirect()->route('borrows.index');
    }
}
