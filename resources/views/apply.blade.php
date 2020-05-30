@extends('layout')

@section('content')
    <h4>Rental Application for: <br><br><small>{{ $rental->fullAddress() }}</small></h4>

    <br>

    <form action="{{ route('apply', $rental) }}" method="post">
        @csrf

        @include('apply-form')

        <p>By submitting this application, I verify that the statements in this application are true and correct. I
            authorize the use of the
            information and contacts provided to complete a credit, reference, employment, or background check,
            including those
            performed by third party screening organizations. I understand that false or lack of information may result
            in my
            disqualification as a tenant. I understand that this is an application for rental and does not constitute a
            rental or lease agreement
            in whole or part.</p>

        <input type="submit" class="button-primary">
    </form>
@endsection
