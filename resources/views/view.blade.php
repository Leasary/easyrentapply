@extends('layout')

@section('content')
    <h4>View Application</h4>

    <a href="{{ route('manage', [$rental, $rental->password]) }}">Back to Rental</a>

    <style>
        input {
            pointer-events: none;
        }
    </style>

    @include('apply-form')

    <ul>
        @foreach($application->getAttributes() as $key => $value)
            <li><strong>{{ \Illuminate\Support\Str::title(str_replace('_', ' ', $key)) }}</strong>: {{ $value }}</li>
        @endforeach
    </ul>
@endsection
