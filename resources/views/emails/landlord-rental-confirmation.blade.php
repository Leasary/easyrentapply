@component('mail::message')
# Rental Posted

Your rental has been posted.

@component('mail::button', ['url' => '#'])
    View Rental
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
