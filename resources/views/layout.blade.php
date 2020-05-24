<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <meta name="description" content="EasyRentApply lets landlords create rental applications & manage them in one single, simple & free location."/>

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @if(config('services.google_analytics.id'))
            <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', '{{ config('services.google_analytics.id') }}');
                </script>
            @endif
    </head>
    <body>

    <div class="container">
        <div class="center">
            <h1><a href="/">EasyRentApply</a></h1>
        </div>

        @yield('content')

        <div class="center small">
            <p>
                Made in Pittsburgh with ♥️<br>
                Problems? Questions? <a href="mailto:luke@leasary.com?subject=EasyRentApply Question">luke@leasary.com</a>
            </p>
        </div>
    </div>

    </body>
</html>
