
@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>Welcome to the Premier League Hub</h1>
    <p>Your one-stop destination for all things Premier League. Stay updated with fixtures, league standings, and more!</p>
    <a href="{{ route('table.index') }}">View League Table</a>
</div>

<div class="container mx-auto mt-16">
    <h2 class="section-title">What You Can Find Here</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Fixtures Section -->
        <div class="feature-card">
            <h3>Fixtures</h3>
            <p>Stay updated with the latest match schedules and results for all Premier League games.</p>
            <a href="{{ route('fixtures.index') }}">View Fixtures</a>
        </div>

        <!-- League Table Section -->
        <div class="feature-card">
            <h3>League Table</h3>
            <p>Check out the current standings and see how your favorite team is performing this season.</p>
            <a href="{{ route('table.index') }}">View League Table</a>
        </div>

        <!-- Players Section -->
        <div class="feature-card">
            <h3>Players</h3>
            <p>Explore player stats, profiles, and achievements from the Premier League.</p>
            <a href="{{ route('players.index') }}">View Players</a>
        </div>
    </div>
</div>
@endsection