@component('mail::message')
# New Application

You have a new application

@component('mail::button', ['url' => '#'])
    View Application
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
