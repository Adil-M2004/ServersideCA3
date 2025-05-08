@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Premier League Teams</h1>

<!-- Add Team Form -->
<div class="add-team-form">
    <h2>Add a New Team</h2>
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Team Name</label>
            <input type="text" name="name" id="name" placeholder="Enter team name">
        </div>
        <div>
            <label for="stadium">Stadium</label>
            <input type="text" name="stadium" id="stadium" placeholder="Enter stadium name">
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" placeholder="Enter city name">
        </div>
        <button type="submit">Add Team</button>
    </form>
</div>

<!-- Teams List -->
<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($teams as $team)
    <li class="flex items-center bg-white shadow-lg rounded-lg p-4">
        <div>
            <h2 class="text-xl font-bold text-purple-800">{{ $team->name }}</h2>
            <p class="text-gray-600">Stadium: {{ $team->stadium }}</p>
            <p class="text-gray-600">City: {{ $team->city }}</p>
        </div>
        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="ml-auto">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-500 transition duration-300">
                Delete
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection