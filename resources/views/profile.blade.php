<x-user-layout>
    <!-- Main container with responsive flex direction -->
    <div class="flex flex-col lg:flex-row items-start justify-between">
        <!-- Left sidebar - full width on mobile, fixed width on desktop -->
        <div class="w-full lg:w-[300px] flex flex-col items-center bg-white px-2 mb-4 lg:mb-0 lg:h-screen">
            <div class="flex flex-col items-center">
                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=mhabib"
                    class="w-[200px] h-[220px] lg:w-[250px] lg:h-[270px] rounded-xl object-cover shadow mt-6"
                    draggable="false" alt="user_profile">

                <h1 class="montserrat-font text-center font-semibold text-lg lg:text-xl mt-3">Muhammad Habib Abdillah
                    Bin Satu</h1>
                <p class="plus-jakarta-sans-font text-center mt-1">18 Years Old</p>
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
        <div class="flex-1 w-full flex flex-col">
            <!-- Top navigation bar -->
            <div class="bg-white py-5 flex justify-between items-center px-3 lg:px-5 border-gray-200">
                <button
                    class="flex items-center space-x-1 montserrat-font text-gray-600 hover:text-black transition-transform duration-300 transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>Back</span>
                </button>

                <p class="font-semibold text-gray-800 text-lg lg:text-xl">User Profile</p>

                <button
                    class="montserrat-font text-gray-600 hover:text-black transition-transform duration-300 transform hover:scale-110">
                    <span>Settings</span>
                </button>
            </div>

            <!-- Right Bottom - transaction history -->
            <div class="bg-gray-100 rounded-lg p-3 lg:p-5 min-h-screen">
                <div class="border-b pb-4 mb-4">
                    <h1 class="text-lg lg:text-xl font-bold text-gray-800">Riwayat Transaksi</h1>
                </div>
                <div class="space-y-4">

                    <!-- Card 1 -->
                    <div class="p-3 lg:p-4 bg-white shadow-xl rounded-lg border-l-4 border-blue-500">
                        <div class="flex justify-between items-start mb-3">
                            <h2 class="text-base lg:text-lg font-semibold text-gray-700">Transaksi #RT25031801</h2>
                            <span
                                class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Lunas</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-3">
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Sewa</p>
                                <p class="text-sm font-medium text-gray-700">18 Maret 2025, 08:00</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Kembali</p>
                                <p class="text-sm font-medium text-gray-700">20 Maret 2025, 08:00</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg mb-3">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-700">Toyota Avanza 2023 (Silver)</p>
                            </div>
                            <p class="text-xs text-gray-600 pl-7">Plat: B 1234 AJH</p>
                        </div>
                        <div class="border-t border-gray-100 pt-3 mb-3">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Biaya Sewa (2 hari)</p>
                                <p class="text-sm font-medium">Rp400.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Asuransi</p>
                                <p class="text-sm font-medium">Rp50.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Pajak (11%)</p>
                                <p class="text-sm font-medium">Rp49.500</p>
                            </div>
                            <div
                                class="flex justify-between items-center font-medium mt-2 pt-2 border-t border-gray-100">
                                <p class="text-gray-700">Total</p>
                                <p class="text-blue-600">Rp499.500</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
                            <div class="flex items-center">
                                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=mhabib" alt="Profile"
                                    class="w-8 h-8 rounded-full mr-2" />
                                <div>
                                    <p class="text-xs text-gray-500">Supir</p>
                                    <p class="text-sm font-medium text-gray-700">Habib bin Abdullah</p>
                                </div>
                            </div>
                            <button
                                class="w-full sm:w-auto px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition-colors duration-300 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Riwayat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="p-3 lg:p-4 bg-white shadow-xl rounded-lg border-l-4 border-blue-500">
                        <div class="flex justify-between items-start mb-3">
                            <h2 class="text-base lg:text-lg font-semibold text-gray-700">Transaksi #RT25031801</h2>
                            <span
                                class="px-2 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">Gagal</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-3">
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Sewa</p>
                                <p class="text-sm font-medium text-gray-700">18 Maret 2025, 08:00</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Kembali</p>
                                <p class="text-sm font-medium text-gray-700">20 Maret 2025, 08:00</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg mb-3">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-700">Toyota Avanza 2023 (Silver)</p>
                            </div>
                            <p class="text-xs text-gray-600 pl-7">Plat: B 1234 AJH</p>
                        </div>
                        <div class="border-t border-gray-100 pt-3 mb-3">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Biaya Sewa (2 hari)</p>
                                <p class="text-sm font-medium">Rp400.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Asuransi</p>
                                <p class="text-sm font-medium">Rp50.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Pajak (11%)</p>
                                <p class="text-sm font-medium">Rp49.500</p>
                            </div>
                            <div
                                class="flex justify-between items-center font-medium mt-2 pt-2 border-t border-gray-100">
                                <p class="text-gray-700">Total</p>
                                <p class="text-blue-600">Rp499.500</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
                            <div class="flex items-center">
                                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=mhabib" alt="Profile"
                                    class="w-8 h-8 rounded-full mr-2" />
                                <div>
                                    <p class="text-xs text-gray-500">Supir</p>
                                    <p class="text-sm font-medium text-gray-700">Habib bin Abdullah</p>
                                </div>
                            </div>
                            <button
                                class="w-full sm:w-auto px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition-colors duration-300 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Riwayat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="p-3 lg:p-4 bg-white shadow-xl rounded-lg border-l-4 border-blue-500">
                        <div class="flex justify-between items-start mb-3">
                            <h2 class="text-base lg:text-lg font-semibold text-gray-700">Transaksi #RT25031801</h2>
                            <span
                                class="px-2 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">Refund</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-3">
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Sewa</p>
                                <p class="text-sm font-medium text-gray-700">18 Maret 2025, 08:00</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Tanggal Kembali</p>
                                <p class="text-sm font-medium text-gray-700">20 Maret 2025, 08:00</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg mb-3">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-700">Toyota Avanza 2023 (Silver)</p>
                            </div>
                            <p class="text-xs text-gray-600 pl-7">Plat: B 1234 AJH</p>
                        </div>
                        <div class="border-t border-gray-100 pt-3 mb-3">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Biaya Sewa (2 hari)</p>
                                <p class="text-sm font-medium">Rp400.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Asuransi</p>
                                <p class="text-sm font-medium">Rp50.000</p>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-sm text-gray-600">Pajak (11%)</p>
                                <p class="text-sm font-medium">Rp49.500</p>
                            </div>
                            <div
                                class="flex justify-between items-center font-medium mt-2 pt-2 border-t border-gray-100">
                                <p class="text-gray-700">Total</p>
                                <p class="text-blue-600">Rp499.500</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
                            <div class="flex items-center">
                                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=mhabib" alt="Profile"
                                    class="w-8 h-8 rounded-full mr-2" />
                                <div>
                                    <p class="text-xs text-gray-500">Supir</p>
                                    <p class="text-sm font-medium text-gray-700">Habib bin Abdullah</p>
                                </div>
                            </div>
                            <button
                                class="w-full sm:w-auto px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition-colors duration-300 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Riwayat Detail
                            </button>
                        </div>
                    </div>
                </div>
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
    </script>
</x-user-layout>