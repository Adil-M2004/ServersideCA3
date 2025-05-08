@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Edit Fixture</h1>

<form action="{{ route('fixtures.update', $fixture->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="home_team_id" class="block text-gray-700 font-bold mb-2">Home Team</label>
        <select name="home_team_id" id="home_team_id" class="w-full border-gray-300 rounded-lg">
            @foreach (\App\Models\Team::all() as $team)
                <option value="{{ $team->id }}" {{ $fixture->home_team_id == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="away_team_id" class="block text-gray-700 font-bold mb-2">Away Team</label>
        <select name="away_team_id" id="away_team_id" class="w-full border-gray-300 rounded-lg">
            @foreach (\App\Models\Team::all() as $team)
                <option value="{{ $team->id }}" {{ $fixture->away_team_id == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="fixture_date" class="block text-gray-700 font-bold mb-2">Fixture Date</label>
        <input type="date" name="fixture_date" id="fixture_date" value="{{ $fixture->fixture_date }}" class="w-full border-gray-300 rounded-lg">
    </div>

    <div class="mb-4">
        <label for="fixture_time" class="block text-gray-700 font-bold mb-2">Fixture Time</label>
        <input type="time" name="fixture_time" id="fixture_time" value="{{ $fixture->fixture_time }}" class="w-full border-gray-300 rounded-lg">
    </div>

    <div class="mb-4">
        <label for="stadium" class="block text-gray-700 font-bold mb-2">Stadium</label>
        <input type="text" name="stadium" id="stadium" value="{{ $fixture->stadium }}" class="w-full border-gray-300 rounded-lg">
    </div>

    <button type="submit" class="bg-purple-800 text-white px-4 py-2 rounded-lg">Update Fixture</button>
</form>
@endsection