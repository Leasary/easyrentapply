<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <style>
            body {
                font-size: 16px;
                font-family: "Microsoft Sans Serif", serif;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
            }

            input {
                display: block;
                font-size: 24px;
                width: 100%;
            }

            input[type=submit] {
                background-color: green;
                color: white;
            }

            h1 a {
                text-decoration: none;
                color: black;
            }

            .center {
                text-align: center;
            }
            .small {
                font-size: 14px;
            }

        </style>

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
                Made in Pittsburgh with ♥️
            </p>
        </div>
    </div>

    </body>
</html>
