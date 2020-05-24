@php
    $relationshipOptions = [
        'parent' => 'Parent',
        'coworker' => 'Coworker',
        'other' => 'Other'
    ];

    $rentOrOwnOptions = [
        'rent' => 'Rent',
        'own' => 'Own'
    ];

    $stateOptions = [
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'District of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    ];
@endphp


<h5>Personal Information</h5>

<div class="rows">
    <div class="four columns">
        <x-text-input key="first_name" label="First Name"/>
    </div>
    <div class="four columns">
        <x-text-input key="middle_name" label="Middle Name"/>
    </div>
    <div class="four columns">
        <x-text-input key="last_name" label="Last Name"/>
    </div>
</div>

<div class="rows">
    <div class="four columns">
        <x-text-input type="email" key="email" label="Email"/>
    </div>
    <div class="four columns">
        <x-text-input type="date" key="date_of_birth" label="Birth Date"/>
    </div>
    <div class="four columns">
        <x-text-input key="phone" label="Phone"/>
    </div>
</div>

<div class="rows">
    <div class="four columns">
        <x-text-input key="social_security_number" label="Social Security Number"/>
    </div>
    <div class="four columns">
        <x-text-input key="drivers_license_number" label="Drivers License Number"/>
    </div>
    <div class="four columns">
        <x-select-input key="drivers_license_state" label="Drivers License State" :options="$stateOptions"/>
    </div>
</div>


@foreach([1,2] as $i)
    <h5>Rental History #{{ $i }}</h5>

    <x-text-input key="rh{{ $i }}_address" label="Address"/>

    <div class="rows">
        <div class="four columns">
            <x-text-input key="rh{{ $i }}_city" label="City"/>
        </div>
        <div class="four columns">
            <x-select-input key="rh{{ $i }}_state" label="State" :options="$stateOptions"/>
        </div>
        <div class="four columns">
            <x-text-input key="rh{{ $i }}_zipcode" label="Zipcode"/>
        </div>
    </div>

    <div class="rows">
        <div class="four columns">
            <x-text-input key="rh{{ $i }}_rent" label="Monthly Rent"/>
        </div>
        <div class="four columns">
            <x-select-input key="rh{{ $i }}_rent_or_own" label="Rent or Own" :options="$rentOrOwnOptions"/>
        </div>
        <div class="four columns">
            <x-text-input key="rh{{ $i }}_reason" label="Reason for Leaving"/>
        </div>
    </div>

    <div class="rows">
        <div class="six columns">
            <x-text-input key="rh{{ $i }}_landlord_name" label="Landlord Name"/>
        </div>
        <div class="six columns">
            <x-text-input key="rh{{ $i }}_landlord_phone" label="Landlord Phone"/>
        </div>
    </div>
@endforeach

@foreach([1,2] as $i)
    <h5>Employment History #{{ $i }}</h5>
    <div class="rows">
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_name" label="Company"/>
        </div>
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_position" label="Position"/>
        </div>
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_tenure" label="Tenure"/>
        </div>
    </div>

    <div class="rows">
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_income" label="Annual Income"/>
        </div>
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_supervisor" label="Supervisor"/>
        </div>
        <div class="four columns">
            <x-text-input key="eh{{ $i }}_supervisor_phone" label="Supervisor Phone"/>
        </div>
    </div>

@endforeach

<h5>References</h5>

@foreach([1,2,3] as $i)
    <div class="rows">
        <div class="four columns">
            <x-text-input key="ref{{ $i }}_name" label="Name"/>
        </div>
        <div class="four columns">
            <x-text-input key="ref{{ $i }}_phone" label="Phone"/>
        </div>
        <div class="four columns">
            <x-select-input key="ref{{ $i }}_relationship" label="Relationship" :options="$relationshipOptions"/>
        </div>
    </div>
@endforeach
