<x-user-layout title="review">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-gray-100 rounded-full"></div>

            <!-- Progress Line (Set to 33% for Review step) -->
            <div class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full"
                style="width: 33%">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan (Completed) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>

                <!-- Step 2: Review (Active) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        2
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Review</div>
                </div>

                <!-- Step 3: Bayar (Inactive) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        3
                    </div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Bayar</div>
                </div>

                <!-- Step 4: Selesai (Inactive) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        4
                    </div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Selesai</div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row w-full min-h-screen bg-gray-50 mt-8">
        <!-- Sisi Kiri (Form Section) -->
        <div class="order-1 sm:order-1 sm:w-[65%] w-full bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Updated user icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0zm-4.5 7a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z" />
                    </svg>
                </span>
                Pemesanan Anda
            </h1>
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Form/Data icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </span>
                Data Pemesanan
            </h1>
            <div class="p-6 bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="mb-5">
                    <h1 class="block mb-2 text-base font-medium text-gray-700">M Habib Abdillah</h1>
                </div>
                <div class="flex flex-col md:flex-row gap-5 w-full">
                    <div class="flex-1">
                        <label for="nomor_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor
                            Telepon</label>
                        <p>+62 812-7483-3877</p>
                    </div>
                    <div class="flex-1">
                        <label for="email" class="block mb-2 text-base font-medium text-gray-700">Email</label>
                        <p>habibabdillah@gmail.com</p>
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Driver icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </span>
                Data Pengemudi
            </h1>
            <div class="p-6 bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="mb-5">
                    <h1 class="block mb-2 text-base font-medium text-gray-700">Tuan Habib Abdillah</h1>
                </div>
                <div class="flex-1">
                    <label for="nomor_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor
                        Telepon</label>
                    <p>+62 812-7483-3877</p>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Pickup location icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                Lokasi Jemput
            </h1>
            <div class="p-6 bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="mb-5">
                    <h1 class="block mb-2 text-base font-medium text-gray-700">Wijaya Rent Car Surabaya</h1>
                </div>
            </div>
            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Return location icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                Lokasi Kembali
            </h1>
            <div class="p-6 bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="mb-5">
                    <h1 class="block mb-2 text-base font-medium text-gray-700">Juanda International Airport (SUB)</h1>
                </div>
            </div>
            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <!-- Special request icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </span>
                Permintaan Khusus Rental Mobil ( Opsional )
            </h1>
            <div class="p-6 bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="mb-5">
                    <textarea
                        class="w-full p-3 mb-4 border border-purple-400 rounded-lg shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50 resize-y min-h-[100px] text-gray-700 placeholder-gray-400 transition duration-150 ease-in-out"
                        placeholder="Tulis permintaan khusus anda di sini"></textarea>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div class="order-1 sm:order-1 sm:w-[35%] w-full p-6 md:p-8 bg-gray-50 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
                <span class="text-purple-600 text-sm font-medium">ID: RNT-20224853</span>
            </div>

            <div
                class="bg-primary bg-opacity-20 shadow-md rounded-xl p-6 space-y-4 text-gray-800 border border-gray-100 mt-4 hover:shadow-lg transition-all">
                <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-purple-100 p-2 rounded-lg">
                            <!-- Car icon for rental -->
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-purple-600">
                                <path
                                    d="M3 8L5.5 4H18.5L21 8M3 8V17C3 18.1046 3.89543 19 5 19H6M3 8H21M21 8V17C21 18.1046 20.1046 19 19 19H18M6 19V21M6 19H18M18 19V21"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 11.01L7.01 10.9989" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 11.01L17.01 10.9989" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-normal lg:text-xl font-bold text-gray-800">Rental Tanpa Sopir</h3>
                            <p class="text-sm text-gray-500">Toyota Avanza 2020</p>
                        </div>
                    </div>
                    <span
                        class="bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-full">Automatic</span>
                </div>

                <p class="text-gray-600 flex items-center">
                    <!-- Building/office icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Wijaya Rent Car Surabaya
                </p>

                <div class="bg-primary bg-opacity-10 p-4 rounded-lg space-y-4 mt-2">
                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <!-- City icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Kota atau Wilayah</h4>
                            <p class="text-gray-600">Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <!-- Calendar/start date icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                            <p class="text-sm text-purple-600 font-medium">09:00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <!-- Pickup location icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Lokasi Jemput</h4>
                            <p class="text-gray-600">Wijaya Rent Car Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <!-- Calendar/end date icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                            <p class="text-sm text-purple-600 font-medium">21:00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <!-- Return location icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Lokasi Kembali</h4>
                            <p class="text-gray-600">Juanda International Airport (SUB)</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-100 pt-4 mt-2">
                   
                    <div class="flex justify-between font-bold text-lg mt-4">
                        <span>Harga</span>
                        <span class="text-purple-600">Rp 1.210.000</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <!-- <a href="{{ route('pemesanan') }}"
                    class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Kembali

                </a> -->
                <a href="{{ route('pembayaran') }}"
                    class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                    Lanjutkan
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</x-user-layout>