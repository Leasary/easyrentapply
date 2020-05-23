@extends('layout')

@section('content')
    <h2>Apply</h2>

    <p>Submit an application to live at:</p>
    <div class="center">
        <p>{{ $rental->fullAddress() }}</p>
    </div>

    <br>

    <form action="{{ route('apply', $rental) }}" method="post">
        @csrf

        <label for="email">email</label>
        <input type="text" name="email" id="email">
        @error("email")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="first_name">first_name</label>
        <input type="text" name="first_name" id="first_name">
        @error("first_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="middle_name">middle_name</label>
        <input type="text" name="middle_name" id="middle_name">
        @error("middle_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="last_name">last_name</label>
        <input type="text" name="last_name" id="last_name">
        @error("last_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="date_of_birth">date_of_birth</label>
        <input type="text" name="date_of_birth" id="date_of_birth">
        @error("date_of_birth")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone">
        @error("phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="social_security_number">social_security_number</label>
        <input type="text" name="social_security_number" id="social_security_number">
        @error("social_security_number")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="drivers_license_number">drivers_license_number</label>
        <input type="text" name="drivers_license_number" id="drivers_license_number">
        @error("drivers_license_number")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="drivers_license_state">drivers_license_state</label>
        <input type="text" name="drivers_license_state" id="drivers_license_state">
        @error("drivers_license_state")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_address">rh1_address</label>
        <input type="text" name="rh1_address" id="rh1_address">
        @error("rh1_address")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_city">rh1_city</label>
        <input type="text" name="rh1_city" id="rh1_city">
        @error("rh1_city")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_state">rh1_state</label>
        <input type="text" name="rh1_state" id="rh1_state">
        @error("rh1_state")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_zipcode">rh1_zipcode</label>
        <input type="text" name="rh1_zipcode" id="rh1_zipcode">
        @error("rh1_zipcode")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_rent">rh1_rent</label>
        <input type="text" name="rh1_rent" id="rh1_rent">
        @error("rh1_rent")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_rent_or_own">rh1_rent_or_own</label>
        <input type="text" name="rh1_rent_or_own" id="rh1_rent_or_own">
        @error("rh1_rent_or_own")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_landlord_name">rh1_landlord_name</label>
        <input type="text" name="rh1_landlord_name" id="rh1_landlord_name">
        @error("rh1_landlord_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_landlord_phone">rh1_landlord_phone</label>
        <input type="text" name="rh1_landlord_phone" id="rh1_landlord_phone">
        @error("rh1_landlord_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh1_reason">rh1_reason</label>
        <input type="text" name="rh1_reason" id="rh1_reason">
        @error("rh1_reason")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_address">rh2_address</label>
        <input type="text" name="rh2_address" id="rh2_address">
        @error("rh2_address")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_city">rh2_city</label>
        <input type="text" name="rh2_city" id="rh2_city">
        @error("rh2_city")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_state">rh2_state</label>
        <input type="text" name="rh2_state" id="rh2_state">
        @error("rh2_state")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_zipcode">rh2_zipcode</label>
        <input type="text" name="rh2_zipcode" id="rh2_zipcode">
        @error("rh2_zipcode")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_rent">rh2_rent</label>
        <input type="text" name="rh2_rent" id="rh2_rent">
        @error("rh2_rent")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_rent_or_own">rh2_rent_or_own</label>
        <input type="text" name="rh2_rent_or_own" id="rh2_rent_or_own">
        @error("rh2_rent_or_own")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_landlord_name">rh2_landlord_name</label>
        <input type="text" name="rh2_landlord_name" id="rh2_landlord_name">
        @error("rh2_landlord_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_landlord_phone">rh2_landlord_phone</label>
        <input type="text" name="rh2_landlord_phone" id="rh2_landlord_phone">
        @error("rh2_landlord_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="rh2_reason">rh2_reason</label>
        <input type="text" name="rh2_reason" id="rh2_reason">
        @error("rh2_reason")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_name">eh1_name</label>
        <input type="text" name="eh1_name" id="eh1_name">
        @error("eh1_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_position">eh1_position</label>
        <input type="text" name="eh1_position" id="eh1_position">
        @error("eh1_position")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_supervisor">eh1_supervisor</label>
        <input type="text" name="eh1_supervisor" id="eh1_supervisor">
        @error("eh1_supervisor")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_supervisor_phone">eh1_supervisor_phone</label>
        <input type="text" name="eh1_supervisor_phone" id="eh1_supervisor_phone">
        @error("eh1_supervisor_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_income">eh1_income</label>
        <input type="text" name="eh1_income" id="eh1_income">
        @error("eh1_income")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh1_tenure">eh1_tenure</label>
        <input type="text" name="eh1_tenure" id="eh1_tenure">
        @error("eh1_tenure")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_name">eh2_name</label>
        <input type="text" name="eh2_name" id="eh2_name">
        @error("eh2_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_position">eh2_position</label>
        <input type="text" name="eh2_position" id="eh2_position">
        @error("eh2_position")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_supervisor">eh2_supervisor</label>
        <input type="text" name="eh2_supervisor" id="eh2_supervisor">
        @error("eh2_supervisor")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_supervisor_phone">eh2_supervisor_phone</label>
        <input type="text" name="eh2_supervisor_phone" id="eh2_supervisor_phone">
        @error("eh2_supervisor_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_income">eh2_income</label>
        <input type="text" name="eh2_income" id="eh2_income">
        @error("eh2_income")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="eh2_tenure">eh2_tenure</label>
        <input type="text" name="eh2_tenure" id="eh2_tenure">
        @error("eh2_tenure")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref1_name">ref1_name</label>
        <input type="text" name="ref1_name" id="ref1_name">
        @error("ref1_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref1_phone">ref1_phone</label>
        <input type="text" name="ref1_phone" id="ref1_phone">
        @error("ref1_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref1_relationship">ref1_relationship</label>
        <input type="text" name="ref1_relationship" id="ref1_relationship">
        @error("ref1_relationship")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref2_name">ref2_name</label>
        <input type="text" name="ref2_name" id="ref2_name">
        @error("ref2_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref2_phone">ref2_phone</label>
        <input type="text" name="ref2_phone" id="ref2_phone">
        @error("ref2_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref2_relationship">ref2_relationship</label>
        <input type="text" name="ref2_relationship" id="ref2_relationship">
        @error("ref2_relationship")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref3_name">ref3_name</label>
        <input type="text" name="ref3_name" id="ref3_name">
        @error("ref3_name")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref3_phone">ref3_phone</label>
        <input type="text" name="ref3_phone" id="ref3_phone">
        @error("ref3_phone")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <label for="ref3_relationship">ref3_relationship</label>
        <input type="text" name="ref3_relationship" id="ref3_relationship">
        @error("ref3_relationship")
        <p>{{ $message }}</p>
        @enderror
        <br>

        <p>By submitting this application, I verify that the statements in this application are true and correct. I authorize the use of the
            information and contacts provided to complete a credit, reference, employment, or background check, including those
            performed by third party screening organizations. I understand that false or lack of information may result in my
            disqualification as a tenant. I understand that this is an application for rental and does not constitute a rental or lease agreement
            in whole or part.</p>

        <input type="submit">
    </form>
@endsection
