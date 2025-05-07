
@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>Premier League Table</h1>
    <p>Stay updated with the latest standings of your favorite teams.</p>
</div>
<div class="overflow-x-auto">
    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>Team Name</th>
                <th>Played</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Losses</th>
                <th>Goals For</th>
                <th>Goals Against</th>
                <th>Goal Difference</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leagueTable as $index => $entry)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $entry->team->name }}</td>
                <td>{{ $entry->played }}</td>
                <td>{{ $entry->wins }}</td>
                <td>{{ $entry->draws }}</td>
                <td>{{ $entry->losses }}</td>
                <td>{{ $entry->goals_for }}</td>
                <td>{{ $entry->goals_against }}</td>
                <td>{{ $entry->goal_difference }}</td>
                <td>{{ $entry->points }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
