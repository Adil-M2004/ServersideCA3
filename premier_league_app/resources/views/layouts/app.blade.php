<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('teams.index') }}">Teams</a>
            <a href="{{ route('fixtures.index') }}">Fixtures</a>
            <a href="{{ route('table.index') }}">Table</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>