<x-user-layout title="pemesanan">
    <div class="w-full lg:max-w-3xl md:max-w-xl mx-auto mt-4 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1 bg-gray-200 rounded"></div>

            <!-- Progress Line (Adjust width percentage for current step) -->
            <div class="progress-line absolute top-5 h-1 bg-gradient-to-r from-green-500 to-green-400 rounded w-0">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan (Active by default) -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-green-500 text-white font-bold border-3 border-green-500 text-sm">
                        1
                    </div>
                    <div class="mt-2 text-xs font-medium text-gray-800">Pesan</div>
                </div>

                <!-- Step 2: Review -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-200 text-gray-500 font-bold border-3 border-gray-200 text-sm">
                        2
                    </div>
                    <div class="mt-2 text-xs font-medium text-gray-500">Review</div>
                </div>

                <!-- Step 3: Bayar -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-200 text-gray-500 font-bold border-3 border-gray-200 text-sm">
                        3
                    </div>
                    <div class="mt-2 text-xs font-medium text-gray-500">Bayar</div>
                </div>

                <!-- Step 4: Selesai -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-200 text-gray-500 font-bold border-3 border-gray-200 text-sm">
                        4
                    </div>
                    <div class="mt-2 text-xs font-medium text-gray-500">Selesai</div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row w-full min-h-screen bg-gray-50">
        <!-- Sisi Kiri (Form Section) -->
        <div class="order-1 sm:order-1 sm:w-[65%] w-full bg-white p-4 md:p-6">
            <h1 class="text-2xl font-bold mb-4 text-gray-800">Data Pemesanan</h1>
            <div
                class="p-4 md:p-6 bg-whitex rounded-xl shadow-md hover:shadow-lg transition-all mb-4 border border-gray-100">
                <div class="mb-4">
                    <label for="nama_lengkap" class="block mb-1 text-lg font-medium text-blue-700">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap"
                        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"
                        placeholder="Masukkan nama lengkap anda">
                </div>
                <div class="flex flex-col md:flex-row gap-4 w-full">
                    <div class="flex-1">
                        <label for="nomor_telepon" class="block mb-1 text-lg font-medium text-blue-700">Nomor
                            Telepon</label>
                        <input type="tel" name="nomor_telepon" id="nomor_telepon"
                            class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"
                            placeholder="Masukkan nomor telepon anda">
                    </div>
                    <div class="flex-1">
                        <label for="email" class="block mb-1 text-lg font-medium text-blue-700">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"
                            placeholder="Masukkan email anda">
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-4 mb-4 text-gray-800">Data Pengemudi</h1>
            <div class="p-4 md:p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-all border border-gray-100">
                <div class="mb-4">
                    <label for="titel" class="block mb-1 text-lg font-medium text-blue-700">Titel</label>
                    <select name="titel" id="titel"
                        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none bg-white">
                        <option value="">Pilih Titel</option>
                        <option value="Tn">Tuan</option>
                        <option value="Ny">Nyonya</option>
                        <option value="Nn">Nona</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row gap-4 w-full">
                    <div class="flex-1">
                        <label for="driver_nama" class="block mb-1 text-lg font-medium text-blue-700">Nama
                            Lengkap</label>
                        <input type="text" name="driver_nama" id="driver_nama"
                            class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"
                            placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="flex-1">
                        <label for="driver_telepon" class="block mb-1 text-lg font-medium text-blue-700">Nomor
                            Telepon</label>
                        <input type="tel" name="driver_telepon" id="driver_telepon"
                            class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"
                            placeholder="Masukkan nomor telepon anda">
                    </div>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div class="order-1 sm:order-1 sm:w-[35%] w-full p-4 md:p-6 bg-white">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
            </div>



            <div class="bg-white shadow-md rounded-xl p-4 md:p-6 space-y-4 text-gray-800 border border-gray-100 mt-4">
                <div class="flex items-center justify-between border-b border-gray-100 pb-3">
                    <div class="flex items-center gap-2">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-800">Rental Tanpa Sopir</h3>
                    </div>
                    <span class="bg-blue-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Automatic</span>
                </div>

                <p class="text-gray-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Wijaya Rent Car Surabaya
                </p>

                <div class="space-y-3 mt-2">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-1 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-700">Kota atau Wilayah</h4>
                            <p class="text-gray-600">Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-1 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-1 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-700">Lokasi Jemput</h4>
                            <p class="text-gray-600">Wijaya Rent Car Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-1 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-1 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-700">Lokasi Kembali</h4>
                            <p class="text-gray-600">Juanda International Airport (SUB)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <button
                    class="bg-gray-800 hover:bg-gray-900 text-white font-medium py-2 px-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    Lanjutkan
                </button>
            </div>
        </div>
    </div>
</x-user-layout>