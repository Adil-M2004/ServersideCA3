<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header>
        <h1>Premier League Hub</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('teams.index') }}">Teams</a>
            <a href="{{ route('fixtures.index') }}">Fixtures</a>
            <a href="{{ route('table.index') }}">Table</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto pt-32 pb-8 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-purple-800 text-white py-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Premier League. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>