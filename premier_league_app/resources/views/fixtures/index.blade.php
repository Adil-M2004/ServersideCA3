<?php
@extends('layouts.app')

@section('content')
<h1>Fixtures</h1>
<ul>
    @foreach ($fixtures as $fixture)
        <li>
            {{ $fixture->homeTeam->name }} vs {{ $fixture->awayTeam->name }}
            on {{ $fixture->fixture_date }} at {{ $fixture->fixture_time }}
        </li>
    @endforeach
</ul>
@endsection
