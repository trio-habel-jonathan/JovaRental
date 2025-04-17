<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Sebagai</title>
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
    <link rel="stylesheet" href="{{ asset('static/style/animation.css') }}">
</head>

<body>
    <div class="w-full h-screen max-h-[1080px] max-w-[1600px] mx-auto flex items-center justify-center relative">
        <div
            class="absolute inset-0 w-full h-full flex flex-col items-start justify-start flex-wrap z-0 overflow-hidden">
            @for ($i = 0; $i < 868; $i++)
                <svg width="48" height="48" viewBox="0 0 48 48">
                    <g fill="none" opacity="0.1">
                        <path d="M48 23.5L0 23.5" stroke="currentColor"></path>
                        <path d="M48 47.5001L0 47.5001" stroke="currentColor"></path>
                        <path d="M23.5 0V48" stroke="currentColor"></path>
                        <path d="M47.5 0V48" stroke="currentColor"></path>
                    </g>
                </svg>
            @endfor
        </div>
        <div
            class="absolute animate-leftright top-12 left-12 w-96 aspect-square bg-accent/50 rounded-full blur-xl z-10">
        </div>
        <div class="absolute animate-downup top-12 left-64 w-48 aspect-square bg-primary/50 rounded-full blur-xl z-10">
        </div>
        <div
            class="absolute animate-downup bottom-12 right-12 w-48 aspect-square bg-accent/50 rounded-full blur-xl z-10">
        </div>
        <div
            class="absolute animate-downup bottom-12 right-48 w-36 aspect-square bg-primary/50 rounded-full blur-xl z-10">
        </div>
        <div class="relative flex flex-col w-1/2 items-center justify-center h-full gap-10 z-30">
            <!-- ========== WRAPPER ========== -->
            <div class="container-card p-12 flex flex-col items-center relative bg-white rounded-2xl shadow-xl">

                <h1 class="text-4xl font-bold text-primary mb-8 montserrat-font">Sewa Sebagai?</h1>
                <form action="{{ route('entityForm') }}" method="GET" class="grid grid-cols-2 gap-8">
                    @csrf
                    @method('GET')
                    <div class="w-full flex items-center justify-center flex-col gap-8 rounded-md shadow-lg transition-all duration-300 ease-in-out hover:scale-105">
                        <div
                            class="bg-primary w-full text-white flex items-center justify-center p-4 h-36 rounded-t-md">
                            <div class="border-4 p-2 border-white rounded-full flex items-center justify-center">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center p-4 space-y-6">
                            <h1 class="font-bold plus-jakarta-sans-font text-xl text-primary">Individu</h1>
                            <p class="montserrat-font text-wrap text-sm">Register as an individual partner to start
                                offering services and earning without a business entity.</p>
                        </div>

                        <button type="submit" name="role" value="individu"
                            class="group relative mb-4 flex items-center rounded-full bg-primary px-6 py-2 font-bold text-sm text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font"> Choose As Individu</span>
                            <!-- SVG icon that appears on hover -->
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

                    <div class="w-full flex items-center justify-center flex-col gap-8 rounded-md shadow-lg transition-all duration-300 ease-in-out hover:scale-105">
                        <div
                            class="bg-primary w-full text-white flex items-center justify-center p-4 h-36 rounded-t-md">
                            <div class="border-4 p-2 border-white rounded-full flex items-center justify-center">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 11H4.6C4.03995 11 3.75992 11 3.54601 11.109C3.35785 11.2049 3.20487 11.3578 3.10899 11.546C3 11.7599 3 12.0399 3 12.6V21M16.5 11H19.4C19.9601 11 20.2401 11 20.454 11.109C20.6422 11.2049 20.7951 11.3578 20.891 11.546C21 11.7599 21 12.0399 21 12.6V21M16.5 21V6.2C16.5 5.0799 16.5 4.51984 16.282 4.09202C16.0903 3.71569 15.7843 3.40973 15.408 3.21799C14.9802 3 14.4201 3 13.3 3H10.7C9.57989 3 9.01984 3 8.59202 3.21799C8.21569 3.40973 7.90973 3.71569 7.71799 4.09202C7.5 4.51984 7.5 5.0799 7.5 6.2V21M22 21H2M11 7H13M11 11H13M11 15H13"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center p-4 space-y-6">
                            <h1 class="font-bold plus-jakarta-sans-font text-xl text-primary">Perusahaan</h1>
                            <p class="montserrat-font text-wrap text-sm">Register as a company partner to manage
                                services professionally with business legality support.</p>
                        </div>

                        <button type="submit" name="role" value="perusahaan"
                            class="group relative mb-4 flex items-center rounded-full bg-primary px-6 py-2 font-bold text-sm text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font"> Choose As Perusahaan</span>
                            <!-- SVG icon that appears on hover -->
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
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>
