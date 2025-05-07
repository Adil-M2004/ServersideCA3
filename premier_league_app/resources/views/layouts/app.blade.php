
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">
    <header>
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Premier League</h1>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('teams.index') }}">Teams</a>
                <a href="{{ route('fixtures.index') }}">Fixtures</a>
                <a href="{{ route('table.index') }}">Table</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Premier League. All rights reserved.</p>
    </footer>
</body>
</html>