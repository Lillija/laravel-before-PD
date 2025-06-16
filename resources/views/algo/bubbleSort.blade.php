<x-layout>
    <!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort</title>
</head>
<body>
    <h1>Bubble Sort</h1>

    <form method="POST" action="{{ route('algo.bubbleSort') }}">
        @csrf
        <label>Ievadi skaitļus ar komatiem (piem., 5,3,8,1):</label><br>
        <input type="text" name="numbers" required>
        <button type="submit">Kārtot</button>
    </form>

    @if (!is_null($sorted))
        <h2>Rezultāts:</h2>
        <p>{{ implode(', ', $sorted) }}</p>
    @endif
    <a href="{{ route('algo.recursiveFactorial') }}">Faktoriāls!</a> <br>
</body>
</html>
</x-layout>
