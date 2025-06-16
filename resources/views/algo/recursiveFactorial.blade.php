<x-layout>
    <!DOCTYPE html>
<html>
<head>
    <title>Faktoriāls</title>
</head>
<body>
    <h1>Faktoriāla aprēķins</h1>

    <form method="POST" action="{{ route('algo.recursiveFactorial') }}">
        @csrf
        <label>Ievadi skaitli:</label><br>
        <input type="number" name="number" min="0" required>
        <button type="submit">Aprēķināt</button>
    </form>

    @if (!is_null($result))
        <h2>Rezultāts:</h2>
        <p>Faktoriāls ir {{ $result }}</p>
    @endif
    <a href="{{ route('algo.bubbleSort') }}">Bubble sort!</a> <br>
</body>
</html>
</x-layout>
