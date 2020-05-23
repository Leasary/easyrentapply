@extends('layout')

@section('content')
    <h2>View Application</h2>

    <a href="{{ route('manage', [$rental, $rental->password]) }}">Back to Rental</a>

    <ul>
        @foreach($application->getAttributes() as $key => $value)
            <li><strong>{{ \Illuminate\Support\Str::title(str_replace('_', ' ', $key)) }}</strong>: {{ $value }}</li>
        @endforeach
    </ul>
@endsection
