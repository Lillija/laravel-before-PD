<x-layout>
    <h1>New Book</h1>

<form action="/books/store" method="POST">
    @csrf
    <div>
        <input 
            type="text" 
            placeholder="Title" 
            name="title" 
            value="{{ old('title') }}"
        >
        @if ($errors->has('title'))
            <div>{{ $errors->first('title') }}</div>
        @endif
    </div>
    <div>
        <input 
            type="text" 
            placeholder="Author" 
            name="author" 
            value="{{ old('author') }}"
        >
        @if ($errors->has('author'))
            <div>{{ $errors->first('author') }}</div>
        @endif
    </div>
    <div>
        <input 
            type="date" 
            placeholder="Release Date" 
            name="released_at" 
            value="{{ old('released_at') }}"
        >
        @if ($errors->has('released_at'))
            <div>{{ $errors->first('released_at') }}</div>
        @endif
    </div>

    <div>
        <input type="submit" value="Create">
    </div>
</form>
</x-layout>
