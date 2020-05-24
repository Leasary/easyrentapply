@extends('layout')

@section('content')
    <p>EasyRentApply lets landlords create rental applications & manage them in one single, simple & free location.</p>
    <p>You can create a new application below, and share a unique application URL with your prospective tenants. Any new
        applications will be emailed directly to you!</p>
    <p><strong>No sign up, no spam, no nonsense.</strong></p>

    <h5>Create a Rental Application</h5>
    <form action="/create" method="post">
        @csrf

        <div class="row">
            <div class="six columns">
                <x-text-input key="name" label="Your Name" autofocus/>
            </div>
            <div class="six columns">
                <x-text-input type="email" key="email" label="Email"/>
            </div>
        </div>

        <p>Only your name & rental address will be shared with the tenant.</p>


        <h5>Rental Property</h5>

        <x-text-input key="address" label="Address"/>

        <div class="rows">
            <div class="four columns">
                <x-text-input key="city" label="City"/>
            </div>
            <div class="four columns">
                <x-text-input key="state" label="State"/>
            </div>
            <div class="four columns">
                <x-text-input key="zipcode" label="Zipcode"/>
            </div>
        </div>

        <input type="submit" class="button-primary">
    </form>
@endsection
