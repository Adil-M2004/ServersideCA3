@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Premier League Teams</h1>

<!-- Add Team Form -->
<form action="{{ route('teams.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mb-8">
    @csrf
    <h2 class="text-2xl font-bold mb-4">Add a New Team</h2>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Team Name</label>
        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg">
    </div>
    <div class="mb-4">
        <label for="stadium" class="block text-gray-700 font-bold mb-2">Stadium</label>
        <input type="text" name="stadium" id="stadium" class="w-full border-gray-300 rounded-lg">
    </div>
    <div class="mb-4">
        <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
        <input type="text" name="city" id="city" class="w-full border-gray-300 rounded-lg">
    </div>
    <button type="submit" class="bg-purple-800 text-white px-4 py-2 rounded-lg">Add Team</button>
</form>

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
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection