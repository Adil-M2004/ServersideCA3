@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold text-center text-purple-800 mb-8">Fixtures</h1>
<ul class="list-disc list-inside">
    @foreach ($fixtures as $fixture)
        @php
            // Generate random date and time within this weekend
            $startOfSaturday = \Carbon\Carbon::now()->next('Saturday')->startOfDay();
            $endOfSunday = \Carbon\Carbon::now()->next('Sunday')->endOfDay();
            $randomDateTime = \Carbon\Carbon::createFromTimestamp(
                rand($startOfSaturday->timestamp, $endOfSunday->timestamp)
            );
        @endphp
        <li class="mb-4">
            <strong>{{ $fixture->homeTeam->name }}</strong> vs <strong>{{ $fixture->awayTeam->name }}</strong>
            on {{ $randomDateTime->format('F j, Y') }}
            at {{ $randomDateTime->format('g:i A') }}
        </li>
    @endforeach
</ul>
@endsection