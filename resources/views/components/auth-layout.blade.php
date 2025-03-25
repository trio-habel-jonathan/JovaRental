<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JovaRental | {{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full h-max">
    @include('content.loading-overlay')
    <div class="background w-full h-full fixed top-0 -z-10">
        <div
            class="absolute inset-0 -z-10 h-full w-full bg-white [background:radial-gradient(125%_125%_at_50%_10%,#fff_40%,#63e_100%)]">
        </div>
    </div>
    <div class="z-10">
        {{ $slot }}
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>
