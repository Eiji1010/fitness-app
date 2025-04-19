<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fitness Dashboard</title>
        @vite('resources/css/dashboard.css')

        @isset($earlyAssetLoad)
            {!! $earlyAssetLoad !!}
        @endisset
    </head>
    <body>
    @include('layouts.dashboard.nav')

    <main>
        {{ $slot }}
    </main>

    @include('layouts.dashboard.footer')

    @vite('resources/js/app.js')

    @isset($lateAssetLoad)
        {!! $lateAssetLoad!!}
    @endisset
    </body>
</html>
