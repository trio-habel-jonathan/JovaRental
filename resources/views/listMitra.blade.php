<x-user-layout title="Daftar Kendaraan">
    <div class="px-6 my-4 max-w-[1600px] mx-auto">
        <h1 class="my-4 text-2xl font-bold montserrat-font">Daftar Kendaraan</h1>
        <div class="flex flex-col items-end justify-between my-4">
            <div class="w-full bg-white rounded-xl shadow-md border border-gray-100 p-5">
                <h3 class="text-xl font-bold text-gray-800 mb-5">Cari & Filter</h3>
                <form id="formFilter" class="grid grid-cols-3 gap-4">
                    <!-- Search Box -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari
                            Mitra</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="JovaRental, Pengusaha...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    class="text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building-2">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                                    <path d="M10 6h4" />
                                    <path d="M10 10h4" />
                                    <path d="M10 14h4" />
                                    <path d="M10 18h4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Lokasi Anda</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Jakarta, Semarang...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    class="text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari
                            Berdasarkan</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Toyota Calya, Agya...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-end gap-4">
                        <!-- Apply Filters Button -->
                        <button type="submit"
                            class="w-full h-fit bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors shadow-sm flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-2">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                            </svg>
                            Terapkan Filter
                        </button>
                        <button type="button" onclick="document.getElementById('formFilter').reset()"
                            class="text-sm w-full rounded-md bg-blue-100 text-blue-600 py-2 px-4 hover:text-blue-800 hover:underline">Reset
                            Semua
                            Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8">
            @for ($i = 0; $i < 1; $i++)
                <div
                    class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 transform transition-all duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left side with image -->
                        <div class="w-full md:w-2/5 p-4 bg-gray-50">
                            <div class="w-full h-[220px] p-4 bg-gray-50">

                            </div>

                            <!-- Car Name and Badge -->
                            <div class="mt-4 flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-gray-800">Toyota Calya</h3>
                                <span
                                    class="text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Mobil</span>
                            </div>

                            <!-- Color -->
                            <div class="mt-3 flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-red-500 border-2 border-white shadow"></div>
                                <p class="text-base font-medium text-gray-700">Merah</p>
                            </div>
                        </div>

                        <!-- Right side with details -->
                        <div class="w-full md:w-3/5 p-6 bg-white">
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2">
                                        </rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tahun Pembuatan</p>
                                        <p class="text-base font-medium text-gray-800">2020</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M5 9l2 -2v10l-2 -2z"></path>
                                        <path d="M15 5l0 14"></path>
                                        <path d="M19 5l0 14"></path>
                                        <path d="M15 9l-2 2l2 2"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tipe Transmisi</p>
                                        <p class="text-base font-medium text-gray-800">Manual</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path
                                            d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0">
                                        </path>
                                        <path d="M12 13v8"></path>
                                        <path d="M9 17l3 3l3 -3"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tenaga Mesin</p>
                                        <p class="text-base font-medium text-gray-800">1197 cc</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Kapasitas Tempat Duduk</p>
                                        <p class="text-base font-medium text-gray-800">6 seat</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                                    <span
                                        class="text-sm font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded">TYT-CLY-001</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-user-layout>
