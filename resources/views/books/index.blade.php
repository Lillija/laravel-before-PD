<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($allTheBooks as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book) }}">Show</a>
                <a href="{{ route('books.edit', $book) }}">Edit</a>
            </div>
        </li>
    @endforeach
</ul>