<html>

    <head>

        <title>{{ $title ?? 'Todo Manager' }}</title>

    </head>

    <body>

        <h1>Navigation</h1>
        <nav>
            <ul>
                <li><a href="/books">All books</a></li>
                <li><a href="/books/create">Create a Book</a></li>
            </ul>
        </nav>
    <hr/>
        {{ $slot }}

    </body>

</html>