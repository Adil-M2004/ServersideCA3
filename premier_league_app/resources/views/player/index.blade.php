@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Premier League Players</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($players as $player)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <h2 class="text-xl font-bold text-purple-800">{{ $player->name }}</h2>
                <p class="text-gray-600">Position: {{ $player->position }}</p>
                <p class="text-gray-600">Team: {{ $player->team->name }}</p>
                <p class="text-gray-600">Age: {{ $player->age }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection