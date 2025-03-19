<x-user-layout title="Home">
    <!-- Hero Section -->
    <section id="home"
        class=" w-full  bg-slate-100 z-10 bg-[url('/hero-background.png')] bg-full bg-cover  py-[4rem] px-10 ">
        <div class="max-w-[1600px] flex items-center justify-between flex-wrap-reverse lg:flex-nowrap mx-auto">
            <div class="max-w-xl ">
                <h1 class="text-7xl font-bold mb-4 uppercase">Welcome to JovaRental</h1>
                <p class="text-xl mb-8 font-medium">our trusted vehicle rental service, offering a seamless and
                    affordable way to
                    rent cars and bikes for any journey. Drive with ease, anytime, anywhere! </p>
                <div class="flex space-x-4">
                    <a href="#menu" class="bg-primary text-white px-6 py-3 rounded-lg transition font-semibold">View
                        More</a>
                </div>
            </div>

            {{-- <p>Hello World</p> --}}
            <div class="w-full max-w-4xl p-4 ">

                <div class="border-2 border-black h-64 mb-4"></div>
                <div class="flex -mx-2">
                    <div class="w-full flex-[200px] p-2">
                        <div class="border-2 border-black h-32"></div>
                    </div>
                    <div class="w-full flex-[200px] p-2">
                        <div class="border-2 border-black h-32"></div>
                    </div>

                </div>
            </div>
        </div>

        {{-- <div class=" max-w-[1600px] inset-0 mx-auto w-full h-full  px-10 z-10 text-gray-700 montserrat-font ">

        </div> --}}
    </section>
    <section id="search" class="w-full">
        <div class="w-full p-12 flex items-center justify-center bg-primary">
            <form action="" class="flex gap-4 bg-white items-center rounded-lg p-4 shadow-lg">
                <div class="flex flex-col items-start justify-center h-full gap-3">
                    <div class="w-full space-y-3">
                        <div class="flex gap-2 rounded-xl cursor-pointer w-full p-3 border border-orange-500 text-black option transition-all duration-300"
                            data-radio="cars">
                            <input id="cars" type="radio" class="hidden" name="radio-type-kendaraan">
                            <label class="w-full h-full cursor-pointer montserrat-font font-semibold"
                                for="cars">Cars</label>
                        </div>
                        <div class="flex gap-2 rounded-xl cursor-pointer w-full p-3 border border-orange-500 text-black option transition-all duration-300"
                            data-radio="motorcycle">
                            <input id="motorcycle" type="radio" class="hidden" name="radio-type-kendaraan">
                            <label class="w-full h-full cursor-pointer montserrat-font font-semibold"
                                for="motorcycle">Motorcycle</label>
                        </div>
                    </div>

                    <script>
                        document.querySelectorAll(".option").forEach(option => {
                            option.addEventListener("click", function() {
                                // Reset semua ke border orange
                                document.querySelectorAll(".option").forEach(el => {
                                    el.classList.remove("bg-orange-500", "text-white");
                                    el.classList.add("border",  "text-black");
                                });
                    
                                // Tambah background orange ke yang dipilih dengan animasi
                                this.classList.remove( "text-black");
                                this.classList.add("bg-orange-500", "text-white");
                    
                                // Pilih radio button sesuai yang diklik
                                const radioId = this.getAttribute("data-radio");
                                document.getElementById(radioId).checked = true;
                            });
                        });
                    </script>

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