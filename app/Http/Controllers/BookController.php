<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['allTheBooks' => $books]);
    }

    public function create() {
        return view('books.create');
    }

  public function store(Request $request) {
    $validated = $request->validate([
        'title' => 'required',     
        'author' => 'required',    
        'released_at' => 'required|date',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $validated['image_path'] = $request->file('image')->store('books', 'public');
    }

    Book::create($validated);

    return redirect()->route('books.index')->with('success', 'Book created successfully.');
}




    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['singleBook' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', ['editBook' => $book]);
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id);
    }
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        try {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->route('books.index')->with('error', 'Failed to delete the book.');
    }}
}
