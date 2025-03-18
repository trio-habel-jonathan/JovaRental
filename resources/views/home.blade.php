<x-user-layout title="Home">
    <!-- Hero Section -->
    <section id="home" class="relative w-full h-screen grid grid-cols-2 bg-slate-100 z-10">
        <div class="w-full h-full flex items-center justify-center z-10 text-gray-700 montserrat-font">
            <div class="max-w-xl">
                <h1 class="text-7xl font-bold mb-4 uppercase">Welcome to JovaRental</h1>
                <p class="text-xl mb-8 font-medium">our trusted vehicle rental service, offering a seamless and
                    affordable way to
                    rent cars and bikes for any journey. Drive with ease, anytime, anywhere! </p>
                <div class="flex space-x-4">
                    <a href="#menu" class="bg-primary text-white px-6 py-3 rounded-lg transition font-semibold">View
                        More</a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 h-screen">
            <img src="https://i.pinimg.com/736x/17/2d/29/172d295c056b00f1f0172eba8dc22ab5.jpg" class="h-full"
                alt="">
        </div>
        <div class="absolute bottom-0 left-0 rotate-180 h-screen">
            <img src="https://i.pinimg.com/736x/17/2d/29/172d295c056b00f1f0172eba8dc22ab5.jpg" class="h-full"
                alt="">
        </div>
        {{-- <div class="absolute left-0 flex flex-wrap h-full relative">
            <div class="absolute inset-0 flex justify-center items-center z-50">
                <img src="https://i.pinimg.com/736x/ef/38/49/ef38494e504f7f985c17e47e79592204.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 mr-24 top-24 flex justify-center items-center">
                <img src="https://i.pinimg.com/736x/7d/f4/c1/7df4c155811e616d43f978360007bc06.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 ml-56 top-28 flex justify-center items-center z-30">
                <img src="https://i.pinimg.com/736x/91/05/02/9105025f7853b39fef534c857c495e5f.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 ml-48 bottom-16 flex justify-center items-center z-30">
                <img src="https://i.pinimg.com/736x/64/5e/7c/645e7c02f62f720ae11d787c99a2cd72.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 mr-80 bottom-32 flex justify-center items-center z-30">
                <img src="https://i.pinimg.com/736x/5c/3d/55/5c3d554d72a2fc9e764ab5aba736389e.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 mr-72 bottom-64 flex justify-center items-center z-20">
                <img src="https://i.pinimg.com/736x/49/13/b9/4913b948bd73e64a41a328b331eae86a.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 ml-80 bottom-48 flex justify-center items-center z-40">
                <img src="https://i.pinimg.com/736x/e0/42/05/e04205caadba6b057c12ea4bfe9ddaeb.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
            <div class="absolute inset-x-0 mr-16 bottom-12 flex justify-center items-center z-20">
                <img src="https://i.pinimg.com/736x/59/f3/60/59f3609697e69dc3be1c0acb4667cb3e.jpg"
                    class="w-48 h-48 object-cover rounded-md shadow-xl" alt="">
            </div>
        </div> --}}
    </section>
    <section id="search" class="w-full">
        <div class="w-full p-12 flex items-center justify-center bg-primary">
            <form action="" class="flex gap-4 bg-white items-center rounded-lg p-4 shadow-lg">
                <div class="flex flex-col items-start justify-center h-full">
                    <div class="flex gap-2">
                        <input id="cars" type="checkbox">
                        <label>Cars</label>
                    </div>
                    <div class="flex gap-2">
                        <input id="motorcycle" type="checkbox"> 
                        <label>Motorcycle</label>
                    </div>
                </div>
                <div>
                    <div class="flex w-full justify-start gap-4">
                        <div class="flex flex-col">
                            <label for="" class="mb-2 text-sm font-medium text-gray-700">Rent Location</label>
                            <input type="text" class="bg-gray-200 p-2 rounded-md focus:outline-none"
                                placeholder="Your City Location...">
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="mb-2 text-sm font-medium text-gray-700">Type Vehicle</label>
                            <input type="text" class="bg-gray-200 p-2 rounded-md focus:outline-none"
                                placeholder="Choosen Type Vihicle...">
                        </div>
                    </div>
                    <div class="flex w-full gap-4 items-end">
                        <div class="flex flex-col">
                            <label for="" class="mb-2 w-80 text-sm font-medium text-gray-700">Start Date
                                Rent</label>
                            <input type="text" class="bg-gray-200 p-2 rounded-md focus:outline-none" id="datepicker"
                                placeholder="Select a date">
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="mb-2 text-sm font-medium text-gray-700">Duration Rent</label>
                            <input type="time" class="bg-gray-200 p-2 rounded-md focus:outline-none"
                                placeholder="Select a date">
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="mb-2 text-sm font-medium text-gray-700">Pick Up Time</label>
                            <input type="time" class="bg-gray-200 p-2 rounded-md focus:outline-none"
                                placeholder="Select a date">
                        </div>
                        <div>
                            <button class="bg-primary px-6 py-2 rounded-md text-white font-bold">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#datepicker", {
                enableTime: false, // Disable time selection (date only)
                dateFormat: "D, d M Y" // Format: YYYY-MM-DD
            });
        });
    </script>

</x-user-layout>
