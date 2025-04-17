<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JovaRental | Sukses</title>
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
    <link rel="stylesheet" href="{{ asset('static/style/app.css') }}">
</head>

<body class="overflow-x-hidden ">
    <div class="absolute inset-0 w-full h-full flex flex-col items-start justify-start flex-wrap z-0">
        @for ($i = 0; $i < 434; $i++) <svg width="48" height="48" viewBox="0 0 48 48">
            <g fill="none" opacity="0.1">
                <path d="M48 23.5L0 23.5" stroke="currentColor"></path>
                <path d="M48 47.5001L0 47.5001" stroke="currentColor"></path>
                <path d="M23.5 0V48" stroke="currentColor"></path>
                <path d="M47.5 0V48" stroke="currentColor"></path>
            </g>
            </svg>
            @endfor

            <div class="flex items-center justify-center z-10 absolute w-screen h-screen">
                <div
                    class="py-8 px-12 border border-gray-300 shadow-lg flex flex-col items-center bg-white rounded-lg">
                    <div class="inline-block p-6 bg-green-500 rounded-full mb-4">
                        <svg width="50" height="50" viewBox="0 0 24 24" class="text-white" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h1 class="text-center montserrat-font font-bold text-2xl text-gray-800">
                        Pendaftaran Mitra Anda Berhasil Dikirim!
                    </h1>
                    <p class="plus-jakarta-sans-font text-center text-gray-600 mt-3">
                        Tim kami sedang memeriksa data Anda. Mohon bersabar, ya!
                    </p>
                    <button onclick="window.location.href='{{route('home')}}'"
                        class="group relative flex items-center mt-6 rounded-md bg-primary px-8 py-3 font-semibold text-lg text-white transition-all duration-300 ease-in-out hover:bg-primary-dark active:bg-primary">
                        <span class="montserrat-font">Kembali ke Beranda</span>
                        <span
                            class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>