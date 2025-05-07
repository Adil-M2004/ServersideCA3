@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Premier League Teams</h1>
<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($teams as $team)
    <li class="flex items-center bg-white shadow-lg rounded-lg p-4">
        <img src="{{ asset('images/teams/' . strtolower(str_replace(' ', '_', $team->name)) . '-logo.png') }}"
             alt="{{ $team->name }} Logo" class="w-16 h-16 rounded-full mr-4">
        <div>
            <h2 class="text-xl font-bold text-purple-800">{{ $team->name }}</h2>
            <p class="text-gray-600">Stadium: {{ $team->stadium }}</p>
            <p class="text-gray-600">City: {{ $team->city }}</p>
        </div>
    </li>
    @endforeach
</ul>
@endsection