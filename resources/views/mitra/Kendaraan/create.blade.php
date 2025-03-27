{{-- <x-mitra-layout title="Dashboard">
    <div class="p-4">
        <div class="gradient-background rounded-2xl p-1.5 custom-shadow mb-8">
            <div class="bg-white rounded-xl p-6 sm:p-8">
                <div class="text-center mb-10">
                    <h1
                        class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 inline-block mb-3">
                        Pendaftaran Kendaraan Baru</h1>
                    <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full mb-3"></div>
                    <p class="text-gray-500">Silakan isi data kendaraan dengan lengkap</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card Informasi Dasar and Card Spesifikasi Teknis remain the same -->

                    <!-- First two cards (keeping them exactly the same) -->
                    <!-- Card Informasi Dasar -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 animated-icon"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                Informasi Dasar
                            </h2>

                            <!-- Nama Kendaraan -->
                            <div class="mb-4">
                                <label for="nama-kendaraan" class="block mb-2 font-medium text-gray-700">Nama
                                    Kendaraan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="nama-kendaraan"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: Toyota Avanza" required>
                                </div>
                            </div>

                            <!-- Tipe Kendaraan -->
                            <div class="mb-4">
                                <label class="block mb-2 font-medium text-gray-700">Tipe Kendaraan</label>
                                <div class="flex space-x-4">
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-blue-50 transition">
                                        <input type="radio" id="mobil" name="tipe-kendaraan" value="mobil"
                                            class="w-4 h-4 text-indigo-600 focus:ring-indigo-500" checked>
                                        <label for="mobil" class="ml-2 text-gray-700 font-medium">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-1 text-indigo-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Mobil
                                            </span>
                                        </label>
                                    </div>
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-blue-50 transition">
                                        <input type="radio" id="motor" name="tipe-kendaraan" value="motor"
                                            class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                        <label for="motor" class="ml-2 text-gray-700 font-medium">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-1 text-indigo-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Motor
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tahun Pembuatan -->
                            <div class="mb-4">
                                <label for="tahun-pembuatan" class="block mb-2 font-medium text-gray-700">Tahun
                                    Pembuatan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input type="number" id="tahun-pembuatan" min="1900" max="2025"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 2020" required>
                                </div>
                            </div>

                            <!-- Warna -->
                            <div class="mb-4">
                                <label for="warna" class="block mb-2 font-medium text-gray-700">Warna</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                        </svg>
                                    </div>
                                    <input type="text" id="warna"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: Putih Metalik" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Spesifikasi Teknis -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span
                                    class="flex items-center justify-center w-10 h-10 bg-indigo-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-indigo-600 animated-icon" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                Spesifikasi Teknis
                            </h2>

                            <!-- Tipe Transmisi -->
                            <div class="mb-4">
                                <label class="block mb-2 font-medium text-gray-700">Tipe Transmisi</label>
                                <div class="flex flex-wrap gap-3">
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input type="radio" id="manual" name="tipe-transmisi" value="manual"
                                            class="w-4 h-4 text-indigo-600 focus:ring-indigo-500" checked>
                                        <label for="manual" class="ml-2 text-gray-700 font-medium">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-1 text-indigo-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Manual
                                            </span>
                                        </label>
                                    </div>
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input type="radio" id="automatic" name="tipe-transmisi" value="automatic"
                                            class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                        <label for="automatic" class="ml-2 text-gray-700 font-medium">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-1 text-indigo-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Automatic
                                            </span>
                                        </label>
                                    </div>
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input type="radio" id="clutch" name="tipe-transmisi" value="clutch"
                                            class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                        <label for="clutch" class="ml-2 text-gray-700 font-medium">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-1 text-indigo-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Clutch
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tenaga Mesin -->
                            <div class="mb-4">
                                <label for="tenaga-mesin" class="block mb-2 font-medium text-gray-700">Tenaga Mesin
                                    (CC)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <input type="number" id="tenaga-mesin"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 1500" required>
                                </div>
                            </div>

                            <!-- Kapasitas Tempat Duduk -->
                            <div class="mb-4">
                                <label for="kapasitas" class="block mb-2 font-medium text-gray-700">Kapasitas Tempat
                                    Duduk</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <input type="number" id="kapasitas" min="1" max="50"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 5" required>
                                </div>
                            </div>

                            <!-- Nomor Plat -->
                            <div class="mb-4">
                                <label for="nomor-plat" class="block mb-2 font-medium text-gray-700">Nomor
                                    Plat</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                        </svg>
                                    </div>
                                    <input type="text" id="nomor-plat"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: B 1234 XYZ" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- UPDATED: Card Unggah Gambar with multiple images and preview -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span
                                    class="flex items-center justify-center w-10 h-10 bg-purple-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-purple-600 animated-icon" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                Foto Kendaraan
                            </h2>

                            <div id="upload-container">
                                <!-- Image counter -->
                                <div class="upload-counter mb-3">
                                    <span id="image-count">0</span>/3 foto diunggah
                                </div>

                                <!-- Upload zone -->
                                <div id="upload-zone" class="upload-zone rounded-xl p-4 text-center cursor-pointer">
                                    <div class="mb-4">
                                        <svg class="mx-auto h-12 w-12 text-indigo-300" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-3 text-sm text-indigo-600 font-medium">Klik untuk mengunggah atau
                                            seret dan lepas gambar di sini</p>
                                        <p class="mt-1 text-xs text-gray-500">PNG, JPG, JPEG (Maks. 5MB)</p>
                                    </div>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only"
                                        accept="image/*" multiple>
                                    <div class="flex justify-center">
                                        <button type="button" id="select-images-btn"
                                            class="px-5 py-2.5 bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-sm font-medium rounded-lg hover:from-blue-600 hover:to-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all button-effect">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                </svg>
                                                Pilih File
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="mt-8">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3.5 px-4 rounded-xl hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all font-medium flex items-center justify-center button-effect">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                        Simpan Data Kendaraan
                    </button>
                    <div class="mt-2 text-xs text-center text-gray-500">Dengan menekan tombol ini, Anda menyetujui
                        Syarat dan Ketentuan yang berlaku</div>
                </div>
            </div>
        </div>
        <a href="{{ route('mitra.kendaraan.kendaraanmitraView') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-mitra-layout> --}}
<x-mitra-layout title="Dashboard">
    <div class="p-4">
        <form action="{{ route('mitra.kendaraan.tambahkendaraanStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="gradient-background rounded-2xl p-1.5 custom-shadow mb-8">
                <div class="bg-white rounded-xl p-6 sm:p-8">
                    <div class="text-center mb-10">
                        <h1
                            class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 inline-block mb-3">
                            Pendaftaran Kendaraan Baru
                        </h1>
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full mb-3">
                        </div>
                        <p class="text-gray-500">Silakan isi data kendaraan dengan lengkap</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card Informasi Dasar -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                            <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                                <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-blue-600 animated-icon" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    Informasi Dasar
                                </h2>

                                <div class="mb-4">
                                    <label for="nama-kendaraan" class="block mb-2 font-medium text-gray-700">Nama
                                        Kendaraan</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="nama-kendaraan" name="nama_kendaraan"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: Toyota Avanza" required>
                                    </div>
                                    @error('nama_kendaraan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="id_kategori" class="block mb-2 font-medium text-gray-700">Kategori
                                        Kendaraan</label>
                                    <select id="id_kategori" name="id_kategori"
                                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategoriKendaraan as $kategori)
                                        <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }} ({{
                                            $kategori->jenisKendaraan->nama_jenis }})</option>
                                        @endforeach
                                    </select>
                                    @error('id_kategori')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="tahun_produksi" class="block mb-2 font-medium text-gray-700">Tahun
                                        Pembuatan</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="number" id="tahun_produksi" name="tahun_produksi" min="1900"
                                            max="2025"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: 2020" required>
                                    </div>
                                    @error('tahun_produksi')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="warna" class="block mb-2 font-medium text-gray-700">Warna</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                            </svg>
                                        </div>
                                        <input type="text" id="warna" name="warna"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: Putih Metalik" required>
                                    </div>
                                    @error('warna')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Card Spesifikasi Teknis -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                            <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                                <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 bg-indigo-100 rounded-full mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-indigo-600 animated-icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                    Spesifikasi Teknis
                                </h2>

                                <div class="mb-4">
                                    <label class="block mb-2 font-medium text-gray-700">Tipe Transmisi</label>
                                    <div class="flex flex-wrap gap-3">
                                        <div
                                            class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                            <input type="radio" id="manual" name="transmisi" value="manual"
                                                class="w-4 h-4 text-indigo-600 focus:ring-indigo-500" checked>
                                            <label for="manual" class="ml-2 text-gray-700 font-medium">Manual</label>
                                        </div>
                                        <div
                                            class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                            <input type="radio" id="automatic" name="transmisi" value="automatic"
                                                class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                            <label for="automatic"
                                                class="ml-2 text-gray-700 font-medium">Automatic</label>
                                        </div>
                                        <div
                                            class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                            <input type="radio" id="kopling" name="transmisi" value="kopling"
                                                class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                            <label for="kopling" class="ml-2 text-gray-700 font-medium">Kopling</label>
                                        </div>
                                    </div>
                                    @error('transmisi')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="cubic_centimeter" class="block mb-2 font-medium text-gray-700">Tenaga
                                        Mesin (CC)</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        <input type="number" id="cubic_centimeter" name="cubic_centimeter"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: 1500" required>
                                    </div>
                                    @error('cubic_centimeter')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="harga_sewa_perhari" class="block mb-2 font-medium text-gray-700">Harga
                                        Sewa Perhari</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                        <input type="number" id="harga_sewa_perhari" name="harga_sewa_perhari" min="1"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: 250000" required>
                                    </div>

                                </div>


                                <div class="mb-4">
                                    <label for="jumlah_kursi" class="block mb-2 font-medium text-gray-700">Kapasitas
                                        Tempat Duduk</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                        <input type="number" id="jumlah_kursi" name="jumlah_kursi" min="1" max="50"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: 5" required>
                                    </div>
                                    @error('jumlah_kursi')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="mb-4">
                                    <label for="plat_nomor" class="block mb-2 font-medium text-gray-700">Nomor
                                        Plat</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                            </svg>
                                        </div>
                                        <input type="text" id="plat_nomor" name="plat_nomor"
                                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                            placeholder="Contoh: B 1234 XYZ" required>
                                    </div>
                                    @error('plat_nomor')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>

                        </div>
                        <div id="upload-container">
                            <!-- Image counter -->
                            <div class="upload-counter mb-3">
                                <span id="image-count">0</span>/3 foto diunggah
                            </div>

                            <!-- Upload zone -->
                            <div class="">
                                <!-- UPLOAD -->
                                <div id="upload-zone" class="upload-zone rounded-xl p-4 text-center cursor-pointer">
                                    <div class="mb-4">
                                        <svg class="mx-auto h-12 w-12 text-indigo-300" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-3 text-sm text-indigo-600 font-medium">Klik untuk mengunggah atau
                                            seret dan lepas gambar di sini</p>
                                        <p class="mt-1 text-xs text-gray-500">PNG, JPG, JPEG (Maks. 5MB)</p>
                                    </div>
                                    <input id="file-upload" name="file_upload[]" type="file" class="sr-only"
                                        accept="image/*,video/*" multiple>
                                    <div class="flex justify-center">
                                        <button type="button" id="select-images-btn"
                                            class="px-5 py-2.5 bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-sm font-medium rounded-lg hover:from-blue-600 hover:to-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all button-effect">
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                </svg>
                                                Pilih File
                                            </span>
                                        </button>
                                    </div>
                                </div>

                                <!-- PREVIEW -->
                                <div class="grid grid-cols-3 gap-5 mt-3 place-items-center">
                                    <div class="border h-[70px] w-[70px] flex items-center justify-center">
                                        <img src="" class="object-cover w-full h-full" alt="Foto/Video">
                                        <input type="text" class="hidden">
                                    </div>
                                    <div class="border h-[70px] w-[70px] flex items-center justify-center">
                                        <img src="" class="object-cover w-full h-full" alt="Foto/Video">
                                        <input type="text" class="hidden">
                                    </div>
                                    <div class="border h-[70px] w-[70px] flex items-center justify-center">
                                        <img src="" class="object-cover w-full h-full" alt="Foto/Video">
                                        <input type="text" class="hidden">
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Trigger klik tombol untuk memunculkan file dialog
                              document.getElementById('select-images-btn').addEventListener('click', function() {
                                  document.getElementById('file-upload').click();
                              });
                            
                              // Fungsi untuk melakukan preview file yang diupload
                              document.getElementById('file-upload').addEventListener('change', function(e) {
                                  const files = e.target.files;
                                  const previewContainers = document.querySelectorAll('.grid.grid-cols-3 > div');
                                  
                                  // Bersihkan preview yang sudah ada
                                  previewContainers.forEach(container => {
                                      const img = container.querySelector('img');
                                      img.src = "";
                                  });
                            
                                  // Menampilkan preview untuk maksimal 2 file
                                  const previewCount = Math.min(files.length, 3);
                                  for (let i = 0; i < previewCount; i++) {
                                      const file = files[i];
                                      const reader = new FileReader();
                            
                                      reader.onload = function(e) {
                                          // Tampilkan preview pada container yang sesuai
                                          previewContainers[i].querySelector('img').src = e.target.result;
                                      }
                                      reader.readAsDataURL(file);
                                  }
                              });
                            </script>

                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3.5 px-4 rounded-xl hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all font-medium flex items-center justify-center button-effect">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                            </svg>
                            Simpan Data Kendaraan
                        </button>
                        <div class="mt-2 text-xs text-center text-gray-500">Dengan menekan tombol ini, Anda menyetujui
                            Syarat dan Ketentuan yang berlaku</div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ route('mitra.kendaraan.kendaraanmitraView') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-mitra-layout>