<x-user-layout title="Review Pemesanan">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>

            <!-- Progress Line (Adjust width percentage for current step) -->
            <div
                class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-[33%]">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan (Active by default) -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-primary">Pesan</div>
                </div>

                <!-- Step 2: Review -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
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
                <span class="bg-purple-100 text-primary p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                Pesanan Rental
            </h1>
            <div class="pr-2 flex flex-col gap-4 py-4 bg-white transition-all h-96 overflow-auto custom-scrollbar mb-6">
                @for ($i = 0; $i < 2; $i++)
                    <a href="{{ route('pesanKendaraan') }}">
                        <div class="border space-y-4 relative w-full shadow-lg p-4 rounded-md ">
                            <div class="flex gap-4">
                                <div class="w-36 h-36 aspect-square">
                                    <img class="w-full h-full object-cover rounded-md"
                                        src="https://i.pinimg.com/736x/6a/9c/94/6a9c94db88cfc28cf20a79cf562de8d5.jpg"
                                        alt="">
                                </div>
                                <div class="flex-1">
                                    <div class="space-y-2">
                                        <h1 class="font-bold montserrat-font text-xl">Mazda RX-7</h1>
                                        <div class="w-full flex flex-col flex-wrap gap-1">
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Tipe Rental</p>
                                                <p class="font-bold montserrat-font">Lepas Kunci</p>
                                            </div>
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Metode Pengantaran</p>
                                                <p class="font-bold montserrat-font">Diambil Di Tempat</p>
                                            </div>
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Penggunaan Sopir</p>
                                                <p class="font-bold montserrat-font">Sepanjang Hari</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-100 border border-gray-200 p-2 flex justify-between items-center rounded-md mt-4">
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Harga Kendaraan</p>
                                            <p class="montserrat-font font-bold">Rp 400.000</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Biaya Pengantaran</p>
                                            <p class="montserrat-font font-bold">Rp 15.000</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Biaya Sopir/Jam</p>
                                            <p class="montserrat-font font-bold">Rp 25.000</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Total</p>
                                            <p class="montserrat-font font-bold">Rp 440.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-primary p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                Data Pemesanan
            </h1>
            <div
                class="p-6 space-y-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="space-y-4">
                    <h1 class="uppercase font-bold text-md plus-jakarta-sans-font">Account Pemesan</h1>
                    <div>
                        <p class="mb-2 text-base font-medium text-gray-500">Nama Account Pemesan</p>
                        <p class="text-md montserrat-font font-medium">Franklin Sebastian Felix</p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Nomor Telepon Account</p>
                            <p class="text-md montserrat-font font-medium">0812345678</p>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Email Account</p>
                            <p class="text-md montserrat-font font-medium">franklinchang@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="space-y-4">
                    <h1 class="uppercase font-bold text-md plus-jakarta-sans-font">Perwakilan Pemesan</h1>
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Nama Perwakilan</p>
                            <p class="text-md montserrat-font font-medium">Tn. Amirul Wira Mustofa</p>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Nomor Telepon Perwakilan</p>
                            <p class="text-md montserrat-font font-medium">0812345678</p>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-primary p-2 rounded-lg mr-3">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                Lokasi Pemesanan
            </h1>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100">
                <div class="flex flex-col md:flex-row gap-5 w-full">
                    <div class="flex-1">
                        <p class="mb-2 text-base font-medium text-gray-500">Lokasi Pengantaran</p>
                        <p class="text-sm montserrat-font font-medium">Tiban Indah, Kec. Sekupang, Kota Batam,
                            Kepulauan
                            Riau</p>
                    </div>
                    <div class="flex-1">
                        <p class="mb-2 text-base font-medium text-gray-500">Lokasi Pengambilan</p>
                        <p class="text-sm montserrat-font font-medium">Komplek Tunas 2 Industrial Estate Blok 7D,
                            Berlian, Batam Centre, Belian, Batam Kota, Batam City, Riau Islands 29444</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[35%] h-fit bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
                <span class="text-primary text-sm font-medium">ID: RNT-20224853</span>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                            <p class="text-sm text-primary font-medium">09:00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                            <p class="text-gray-600">Kamis, 10 Maret 2022</p>
                            <p class="text-sm text-primary font-medium">21:00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
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
                <a href="{{ route('pembayaran') }}"
                    class="bg-primary hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
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
