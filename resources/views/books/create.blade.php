<x-layout>
    <h1>New Book</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Title --}}
        <div>
            <input 
                type="text" 
                placeholder="Title" 
                name="title" 
                value="{{ old('title') }}"
            >
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        {{-- Author --}}
        <div>
            <input 
                type="text" 
                placeholder="Author" 
                name="author" 
                value="{{ old('author') }}"
            >
            @error('author')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        {{-- Release Date --}}
        <div>
            <input 
                type="date" 
                name="released_at" 
                value="{{ old('released_at') }}"
            >
            @error('released_at')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        {{-- Image Upload --}}
        <div>
            <label for="image">Book Cover Image:</label>
            <input 
                type="file" 
                name="image" 
                id="image"
            >
            @error('image')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        {{-- Submit --}}
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</x-layout>

