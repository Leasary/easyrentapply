@extends('layout')

@section('content')
    <h2>Create Rental</h2>
    <p>Simple, fast & free property applications for simplifying data collection for landlords.</p>

    <form action="/create" method="post">
        @csrf

        <label for="email">email</label>
        <input type="email" name="email" id="email" autofocus>
        @error("email")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="name">name</label>
        <input type="text" name="name" id="name">
        @error("name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="address">address</label>
        <input type="text" name="address" id="address">
        @error("address")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="city">city</label>
        <input type="text" name="city" id="city">
        @error("city")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="state">state</label>
        <input type="text" name="state" id="state">
        @error("state")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="zipcode">zipcode</label>
        <input type="text" name="zipcode" id="zipcode">
        @error("zipcode")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <input type="submit">
    </form>
@endsection
