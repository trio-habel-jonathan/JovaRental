<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>JovaRental | {{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        .background {
            background-color: #e5e5f7;
            opacity: 0.2;
            background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #e5e5f7 40px), repeating-linear-gradient(#3A2C7555, #3A2C75);
        }
    </style>
</head>

<body class="w-full h-max">
    @if (session('type') && session('message'))
    <x-alert type="{{ session('type') }}" message="{{ session('message') }}"></x-alert>
    @endif
    <div class="background w-full h-full fixed top-0 left-0 -z-20"></div>
    @include('content.loading-overlay')
    <div class="z-10">
        {{ $slot }}
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>