@extends('layouts.app')

@section('content')
<div class="hero bg-purple-800 text-white text-center py-20">
    <h1 class="text-5xl font-bold mb-4">Welcome to the Premier League Hub</h1>
    <p class="text-lg mb-6">Your one-stop destination for all things Premier League. Stay updated with fixtures, league standings, and more!</p>
    <a href="{{ route('table.index') }}" class="bg-yellow-500 text-purple-800 px-6 py-3 rounded-lg font-bold hover:bg-yellow-400">
        View League Table
    </a>
</div>

<div class="container mx-auto mt-10">
    <h2 class="text-3xl font-bold mb-6 text-center">What You Can Find Here</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Fixtures Section -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-2xl font-bold mb-4">Fixtures</h3>
            <p class="text-gray-600 mb-4">Stay updated with the latest match schedules and results for all Premier League games.</p>
            <a href="{{ route('fixtures.index') }}" class="text-purple-800 font-bold hover:underline">View Fixtures</a>
        </div>

        <!-- League Table Section -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-2xl font-bold mb-4">League Table</h3>
            <p class="text-gray-600 mb-4">Check out the current standings and see how your favorite team is performing this season.</p>
            <a href="{{ route('table.index') }}" class="text-purple-800 font-bold hover:underline">View League Table</a>
        </div>

        <!-- Players Section -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-2xl font-bold mb-4">Players</h3>
            <p class="text-gray-600 mb-4">Explore player stats, profiles, and achievements from the Premier League.</p>
            <a href="{{ route('players.index') }}" class="text-purple-800 font-bold hover:underline">View Players</a>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-10 mt-10">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">About the Premier League Hub</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            The Premier League Hub is your ultimate resource for staying connected with the most exciting football league in the world. From match schedules to player stats and league standings, we bring you everything you need to follow the action.
        </p>
    </div>
</div>
@endsection
