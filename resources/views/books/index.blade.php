<x-layout>
    <h1>Books</h1>

<a href="/books/create">Create a book</a>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

<ul>
    @foreach($allTheBooks as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book) }}">Show</a>
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
</x-layout>
