@extends('layouts.app')

@section('content')
<h1>Premier League Teams</h1>
<ul>
    @foreach ($teams as $team)
        <li>
            <strong>{{ $team->name }}</strong> - {{ $team->stadium }} ({{ $team->city }})
        </li>
    @endforeach
</ul>
@endsection