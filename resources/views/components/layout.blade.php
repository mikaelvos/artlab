<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Artlab Portfolio' }}</title>

    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            p {
                font-family: "Comic Sans MS"
            }
        </style>
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body class="bg-cyan-200" id="top">
@include('components.misc.topbutton')
<div class="m-auto w-md md:w-3xl pt-2">
    <x-header/>
    <div class="bg-amber-200 border-2 border-red-500 rounded-md border-dashed p-2">
        <div>
            {{ $slot }}
        </div>
        <x-footer/>
    </div>
</div>

</body>
</html>
