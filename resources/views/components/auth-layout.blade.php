<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>JovaRental | {{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="w-full h-max">
    @if (session('type') && session('message'))
    <x-alert type="{{ session('type') }}" message="{{ session('message') }}"></x-alert>
    @endif
    @include('content.loading-overlay')
    <div></div>
    <div class="z-30 p-6 h-screen">
        {{ $slot }}
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>
<script src="{{ asset('static/js/preventDoubleClick.js') }}"></script>

</html>