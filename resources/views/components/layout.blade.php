<html>
    <head>
        <title>{{ $title ?? 'Items' }}</title>
      <link rel="stylesheet" href="{{ url('css/style.css')}}">
    </head>
    <body>
        <h1>Items</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>