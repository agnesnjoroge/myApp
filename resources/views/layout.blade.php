<html>
    <head>
        <title>{{ $title ?? 'Items' }}</title>
    </head>
    <body>
        <h1>Items</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>