<x-user-layout title="profile">
    <!-- Main container with responsive flex direction -->
    <div class="flex flex-col lg:flex-row items-start justify-between mx-auto max-w-[1600px]">
        <!-- Left sidebar - full width on mobile, fixed width on desktop -->
        <div class="w-full lg:w-[300px] flex flex-col items-center bg-white px-2 mb-4 lg:mb-0 lg:h-screen mt-[80px]">
            <div class="flex flex-col items-center">
                <!-- Container untuk gambar dan tombol kamera -->
                <div class="relative">
                    <!-- Gambar Profil -->
                    <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=mhabib"
                        class="w-[200px] h-[220px] lg:w-[250px] lg:h-[270px] rounded-xl object-cover shadow mt-6"
                        draggable="false" alt="user_profile">

                    <!-- Input File (Hidden) -->
                    <input type="file" id="upload-button" class="hidden" accept="image/*">

                    <!-- Label untuk Input File (Tombol SVG Kamera) -->
                    <label for="upload-button"
                        class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </label>
                </div>

                <!-- Nama dan Umur -->
                <h1 class="montserrat-font text-center font-semibold text-lg lg:text-xl mt-3">Muhammad Habib Abdillah
                    Bin Satu</h1>
                <p class="plus-jakarta-sans-font text-center mt-1">habibabdillah@gmail.com</p>
            </div>
            <!-- Accordion - full width on all screen sizes -->
            <div class="w-full max-w-md mx-auto mt-4">
                <div class="max-w-md mx-auto border border-gray-200 rounded-2xl">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 bg-white rounded-2xl hover:bg-gray-50"
                        data-collapse-toggle="contact-info-1">
                        <span class="text-lg">Info Dasar</span>
                        <svg data-accordion-icon
                            class="w-5 h-5 shrink-0 text-gray-600 transition-transform duration-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                    <div id="contact-info-1"
                        class="overflow-hidden hidden text-gray-700 bg-gray-50 rounded-2xl border-t border-gray-200">
                        <div class="p-5">
                            <label for=""><strong
                                    class="inline-block w-32 font-semibold text-gray-700">Email:</strong></label>
                            <p class="mb-3 text-md">habibabdillah@gmail.com</p>
                            <label for=""><strong
                                    class="inline-block w-32 font-semibold text-gray-700">Username:</strong></label>
                            <p class="mb-3 text-md">Habib Abdillah</p>
                            <label for=""><strong class="inline-block w-32 font-semibold text-gray-700">No
                                    HP:</strong></label>
                            <p class="mb-3 text-md">081264728237</p>
                            <label for=""><strong
                                    class="inline-block w-32 font-semibold text-gray-700">Password:</strong></label>
                            <p class="mb-3 text-md">********</p>
                            <a href="#"
                                class="text-md font-normal  text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out">Edit
                                Data</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-md mx-auto mt-4">
                <div class="max-w-md mx-auto border border-gray-200 rounded-2xl">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 bg-white rounded-2xl hover:bg-gray-50"
                        data-collapse-toggle="contact-info-2">
                        <span class="text-lg">Alamat</span>
                        <svg data-accordion-icon
                            class="w-5 h-5 shrink-0 text-gray-600 transition-transform duration-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                    <div id="contact-info-2"
                        class="overflow-hidden hidden text-gray-700 bg-gray-50 rounded-2xl border-t border-gray-200">
                        <div class="p-5">
                            <label for=""><strong
                                    class="inline-block w-32 font-semibold text-gray-700">Alamat:</strong></label>
                            <p class="mb-3 text-md">Bengkong, Batam</p>
                            <a href="#"
                                class="text-md font-normal  text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out">Edit
                                Alamat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right content area - full width on all screens -->
        <div class="flex-1 w-full flex flex-col lg:mt-[80px] mt-[20px]">
            <!-- Top navigation bar -->
            <div class="bg-white py-5 flex justify-between items-center px-3 lg:px-5 border-gray-200">
                <button id="back-button"
                    class="hidden items-center space-x-1 montserrat-font text-gray-600 hover:text-black transition-transform duration-300 transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>Back</span>
                </button>

                <p id="page-title" class="font-semibold text-gray-800 text-lg lg:text-xl">User Profile</p>

                <button id="settings-button"
                    class="cursor-pointer montserrat-font text-gray-600 hover:text-black transition-transform duration-300 transform hover:scale-110">
                    <span>Settings</span>
                </button>
            </div>

            <!-- Dynamic Content Area -->
            <div id="content-area" class="bg-gray-100 rounded-lg p-3 lg:p-5 min-h-screen">
                @include('partials.user_profile')
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dapatkan semua tombol accordion
            const buttons = document.querySelectorAll('[data-collapse-toggle]');

            // Tambahkan event listener untuk setiap tombol
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // Dapatkan ID target dari atribut data-collapse-toggle
                    const targetId = button.getAttribute('data-collapse-toggle');
                    const content = document.getElementById(targetId);
                    const icon = button.querySelector('[data-accordion-icon]');

                    const isHidden = content.classList.contains('hidden');

                    if (isHidden) {
                        content.classList.remove('hidden');

                        const contentHeight = content.scrollHeight;

                        content.animate([
                            { height: '0px' },
                            { height: contentHeight + 'px' }
                        ], {
                            duration: 300,
                            easing: 'ease-out'
                        });

                        icon.classList.add('rotate-180');
                    } else {
                        const contentHeight = content.scrollHeight;

                        const animation = content.animate([
                            { height: contentHeight + 'px' },
                            { height: '0px' }
                        ], {
                            duration: 300,
                            easing: 'ease-in'
                        });

                        animation.onfinish = () => {
                            content.classList.add('hidden');
                        };

                        icon.classList.remove('rotate-180');
                    }
                });
            });
        });
    
        document.addEventListener("DOMContentLoaded", function () {
    const settingsButton = document.getElementById("settings-button");
    const backButton = document.getElementById("back-button");
    const contentArea = document.getElementById("content-area");
    const pageTitle = document.getElementById("page-title");

    settingsButton.addEventListener("click", function () {
        // Ganti konten dengan halaman Settings
        contentArea.innerHTML = `@include('partials.user_profile_setting')`;
        pageTitle.textContent = "Settings";

        // Tampilkan tombol "Back", sembunyikan tombol "Settings"
        backButton.classList.remove("hidden");
        backButton.classList.add("flex");
        settingsButton.classList.add("hidden");
    });

    backButton.addEventListener("click", function () {
        // Kembalikan ke halaman Profile
        contentArea.innerHTML = `@include('partials.user_profile')`;
        pageTitle.textContent = "User Profile";

        // Tampilkan tombol "Settings", sembunyikan tombol "Back"
        settingsButton.classList.remove("hidden");
        backButton.classList.remove("flex");
        backButton.classList.add("hidden");
    });
});

    </script>

    {{-- <script src="{{asset('/static/js/profile_setting.js')}}"></script> --}}
</x-user-layout>