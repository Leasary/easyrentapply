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
        @if(config('services.facebook.id'))
            <!-- Facebook Pixel Code -->
            <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                    n.queue=[];t=b.createElement(e);t.async=!0;
                    t.src=v;s=b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t,s)}(window, document,'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '{{ config('services.facebook.id') }}');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
                           src="https://www.facebook.com/tr?id={{ config('services.facebook.id') }}&ev=PageView&noscript=1"
                /></noscript>
            <!-- End Facebook Pixel Code -->
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
