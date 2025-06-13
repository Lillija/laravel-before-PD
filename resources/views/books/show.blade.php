<x-layout>
    <h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<a href="/books">All books</a>
</x-layout>