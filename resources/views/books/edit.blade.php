<x-layout>
    <h1>Edit book</h1>

<form action="/books/{{ $editBook->id }}/update" method="post">
    @csrf
    @method('put')

    <input type="text" name="title" placeholder="title goes here" value="{{ $editBook->title }}">
    <input type="text" name="author" placeholder="author goes here" value="{{ $editBook->author }}">
    <input type="date" name="released_at" placeholder="date goes here" value="{{ $editBook->released_at }}">
    <input type="submit" value="Update">
</form>
</x-layout>