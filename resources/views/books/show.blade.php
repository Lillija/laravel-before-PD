<x-layout>
    <h2>{{ $singleBook->title }}</h2>
    <h3>{{ $singleBook->author }}</h3>
    <p>{{ $singleBook->released_at }}</p>

    {{-- Show book image if available --}}
    @if ($singleBook->image_path)
        <img src="{{ asset('storage/' . $singleBook->image_path) }}" 
             alt="Book Cover" 
             style="max-width: 300px; margin-top: 20px;">
    @endif

    <p><a href="{{ route('books.index') }}">All books</a></p>
</x-layout>
