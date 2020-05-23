@extends('layout')

@section('content')
    <h2>Your Rental</h2>

    <p><strong>Application URL:</strong> <a href="{{ route('apply', $rental) }}">{{ route('apply', $rental) }}</a></p>

    <p><strong>Address:</strong> {{ $rental->fullAddress() }}</p>

    <h2>Applications</h2>

    <ul>
    @foreach($rental->applications as $app)
        <li><a href="{{ route('view', [$rental, $app, $rental->password]) }}">{{ $app->first_name }} {{ $app->last_name }} - {{ $app->email }} {{ $app->phone }}</a></li>
    @endforeach
    </ul>
@endsection
