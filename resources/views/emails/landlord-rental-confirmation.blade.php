@component('mail::message')
# Rental Posted

Your rental has been posted.

@component('mail::button', ['url' => route('manage', [$rental, $rental->password])])
    Manage Rental
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
