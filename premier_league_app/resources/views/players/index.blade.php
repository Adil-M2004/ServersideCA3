@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Premier League Players</h1>

    <!-- Add Player Form -->
    <div class="add-player-form bg-white p-6 rounded-lg shadow-lg mb-8 max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-purple-800 mb-4 text-center">Add a New Player</h2>
        <form action="{{ route('players.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Player Name</label>
                <input type="text" name="name" id="name" placeholder="Enter player name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-800">
            </div>
            <div>
                <label for="position" class="block text-lg font-semibold text-gray-700 mb-2">Position</label>
                <input type="text" name="position" id="position" placeholder="Enter player position"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-800">
            </div>
            <div>
                <label for="team_id" class="block text-lg font-semibold text-gray-700 mb-2">Team</label>
                <select name="team_id" id="team_id" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-800">
                    @foreach (\App\Models\Team::all() as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="age" class="block text-lg font-semibold text-gray-700 mb-2">Age</label>
                <input type="number" name="age" id="age" placeholder="Enter player age"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-800">
            </div>
            <button type="submit"
                class="w-full bg-purple-800 text-white font-bold py-3 rounded-lg hover:bg-purple-700 transition duration-300">
                Add Player
            </button>
        </form>
    </div>

    <!-- Players List -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($players as $player)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <h2 class="text-xl font-bold text-purple-800">{{ $player->name }}</h2>
                <p class="text-gray-600">Position: {{ $player->position }}</p>
                <p class="text-gray-600">Team: {{ $player->team->name }}</p>
                <p class="text-gray-600">Age: {{ $player->age }}</p>
                <form action="{{ route('players.destroy', $player->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full bg-red-600 text-white font-bold py-2 rounded-lg hover:bg-red-500 transition duration-300">
                        Delete Player
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection