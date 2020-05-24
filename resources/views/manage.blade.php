@extends('layout')

@section('content')
    <h4>Your Rental</h4>

    <p><strong>Application URL:</strong> <br><a href="{{ route('apply', $rental->slug) }}">{{ route('apply', $rental->slug) }}</a></p>

    <p><strong>Address:</strong> {{ $rental->fullAddress() }}</p>

    <h4>Applications</h4>

    <ul>
    @foreach($rental->applications as $app)
        <li><a href="{{ route('view', [$rental, $app, $rental->password]) }}">{{ $app->first_name }} {{ $app->last_name }} - {{ $app->email }} {{ $app->phone }}</a></li>
    @endforeach
    </ul>
@endsection
