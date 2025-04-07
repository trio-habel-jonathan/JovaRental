<x-user-layout title="Pemesanan">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>

            <!-- Progress Line (Adjust width percentage for current step) -->
            <div
                class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-0">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan (Active by default) -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>

                <!-- Step 2: Review -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        2
                    </div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Review</div>
                </div>

                <!-- Step 3: Bayar -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        3
                    </div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Bayar</div>
                </div>

                <!-- Step 4: Selesai -->
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
    <div class="flex flex-col sm:flex-row w-full min-h-screen gap-4 p-4 mt-8">
        <!-- Sisi Kiri (Form Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[65%] w-full rounded-md bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                Data Pemesanan
            </h1>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="mb-5">
                    <label for="nama_lengkap" class="block mb-2 text-base font-medium text-gray-700">Nama
                        Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap"
                        class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                        placeholder="Masukkan nama lengkap anda">
                </div>
                <div class="flex flex-col md:flex-row gap-5 w-full">
                    <div class="flex-1">
                        <label for="nomor_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor
                            Telepon</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                            <input type="tel" name="nomor_telepon" id="nomor_telepon"
                                class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                placeholder="8123456789">
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="email" class="block mb-2 text-base font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            placeholder="Masukkan email anda">
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                Data Pengemudi
            </h1>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="mb-5">
                    <label for="titel" class="block mb-2 text-base font-medium text-gray-700">Titel</label>
                    <div class="relative">
                        <select name="titel" id="titel"
                            class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white pr-10">
                            <option value="">Pilih Titel</option>
                            <option value="Tn">Tuan</option>
                            <option value="Ny">Nyonya</option>
                            <option value="Nn">Nona</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-5 w-full">
                    <div class="flex-1">
                        <label for="driver_nama" class="block mb-2 text-base font-medium text-gray-700">Nama
                            Lengkap</label>
                        <input type="text" name="driver_nama" id="driver_nama"
                            class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            placeholder="Masukkan nama lengkap pengemudi">
                    </div>
                    <div class="flex-1">
                        <label for="driver_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor
                            Telepon</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                            <input type="tel" name="driver_telepon" id="driver_telepon"
                                class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                placeholder="8123456789">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[35%] bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
                <span class="text-purple-600 text-sm font-medium">ID: RNT-20224853</span>
            </div>

            <div
                class="rounded-xl p-6 space-y-4 text-gray-800 border border-gray-100 mt-4 hover:shadow-lg transition-all">
                <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-purple-100 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                class="text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-normal lg:text-xl font-bold text-gray-800"> Wijaya Rent Car Surabaya</h3>
                            <p class="text-sm text-gray-500">Indonesia, Surabaya</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white plus-jakarta-sans-font p-4 rounded-lg space-y-4 mt-2">
                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Kota atau Wilayah</h4>
                            <p class="text-gray-600">Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
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
            </div>
            <div class="flex justify-end mt-6">
                <a href="{{ route('review') }}"
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
