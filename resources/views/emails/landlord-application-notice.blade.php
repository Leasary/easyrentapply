@component('mail::message')
# New Application

You have a new application at {{ config('app.name') }}!

@component('mail::button', ['url' => route('view', [$rental, $application, $rental->password])])
    View Application
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
