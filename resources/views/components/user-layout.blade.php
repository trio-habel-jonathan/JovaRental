<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JovaRental | {{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Atugatran/FontAwesome6Pro@latest/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('static/style/app.css') }}">
    <link rel="stylesheet" href="{{ asset('static/style/animation.css') }}">

</head>


<body class="bg-gray-100 mx-auto">
    {{-- @include('content.loading-overlay') --}}
    @if (session('type') && session('message'))
        <x-alert type="{{ session('type') }}" message="{{ session('message') }}"></x-alert>
    @endif
    @include('content.loading-overlay')

    @include('content.navbar')

    {{-- @yield('content') --}}
    <main class="overflow-y-auto">
        {{ $slot }}
    </main>

    @if (!request()->is(['profile', 'profile/history', 'profile/settings']))
        @include('content.footer')
    @endif

</body>

</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="{{ asset('static/js/preventDoubleClick.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get today's date
        const today = new Date();

        // Get tomorrow's date
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);

        // Set default time to 9:00
        today.setHours(9, 0, 0);
        tomorrow.setHours(9, 0, 0);

        // Initialize start date flatpickr
        flatpickr("#tanggal_mulai_rental", {
            altInput: true,
            altFormat: "D, d M Y",
            dateFormat: "Y-m-d",
            time_24hr: true,
            defaultDate: today,
            minDate: "today"
        });
        
        flatpickr("#tanggal_mulai_sopir", {
            altInput: true,
            altFormat: "D, d M Y",
            dateFormat: "Y-m-d",
            time_24hr: true,
            defaultDate: today,
            minDate: "today"
        });

        // Initialize end date flatpickr
        flatpickr("#tanggal_selesai_rental", {
            altInput: true,
            altFormat: "D, d M Y",
            dateFormat: "Y-m-d",
            time_24hr: true,
            defaultDate: tomorrow,
            minDate: today
        });

        // Update the minDate of the end date picker when start date changes
        const startDatePicker = document.querySelector("#tanggal_mulai_rental")._flatpickr;
        startDatePicker.config.onChange.push(function(selectedDates, dateStr) {
            const minEndDate = new Date(selectedDates[0]);
            minEndDate.setDate(minEndDate.getDate() + 1);

            const endDatePicker = document.querySelector("#tanggal_selesai_rental")._flatpickr;
            endDatePicker.set("minDate", minEndDate);

            // If current end date is before new min date, update it
            if (endDatePicker.selectedDates[0] < minEndDate) {
                endDatePicker.setDate(minEndDate);
            }
        });
    });
</script>

</html>
