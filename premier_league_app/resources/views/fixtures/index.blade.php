
@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Fixtures</h1>
<ul class="list-disc list-inside">
    @foreach ($fixtures as $fixture)
        @php
            $startOfSaturday = \Carbon\Carbon::now()->next('Saturday')->startOfDay();
            $endOfSunday = \Carbon\Carbon::now()->next('Sunday')->endOfDay();
            $randomDateTime = \Carbon\Carbon::createFromTimestamp(
                rand($startOfSaturday->timestamp, $endOfSunday->timestamp)
            );

            // Generate the file name for the team logos
            $homeTeamLogo = strtolower(str_replace([' ', '&'], ['-', 'and'], $fixture->homeTeam->name)) . '-logo.png';
            $awayTeamLogo = strtolower(str_replace([' ', '&'], ['-', 'and'], $fixture->awayTeam->name)) . '-logo.png';
        @endphp
        <li class="mb-4 flex items-center">
            <img src="{{ asset('images/teams/' . $homeTeamLogo) }}"
                 alt="{{ $fixture->homeTeam->name }} Logo" class="w-12 h-12 rounded-full mr-4">
            <strong>{{ $fixture->homeTeam->name }}</strong> vs
            <img src="{{ asset('images/teams/' . $awayTeamLogo) }}"
                 alt="{{ $fixture->awayTeam->name }} Logo" class="w-12 h-12 rounded-full mx-4">
            <strong>{{ $fixture->awayTeam->name }}</strong>
            on {{ $randomDateTime->format('F j, Y') }}
            at {{ $randomDateTime->format('g:i A') }}
        </li>
    @endforeach
</ul>
@endsection