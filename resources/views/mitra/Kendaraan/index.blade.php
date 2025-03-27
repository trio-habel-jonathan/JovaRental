<x-mitra-layout title="Daftar Kendaraan">


    <div class="flex gap-4 w-full p-4  " style="overflow:visible">
        <!-- Main content - car listings (75% width) -->
        <div class="w-3/4">
            <div class="grid grid-cols-1 gap-8 ">
                <!-- Toyota Calya Card -->
                @foreach ($allKendaraan as $kendaraan)
                @include('mitra.Kendaraan.partials.kartu-kendaraan')
                @endforeach
            </div>
        </div>

        <!-- Sidebar - Search and Filters (25% width) -->
        <div class="w-1/4">
            <div class="sticky top-16 bg-white rounded-xl shadow-md border border-gray-100 p-5">
                <h3 class="text-xl font-bold text-gray-800 mb-5">Cari & Filter</h3>

                <!-- Search Box -->
                <div class="mb-6">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari Kendaraan</label>
                    <div class="relative">
                        <input type="text" id="search"
                            class="w-full bg-gray-50 border border-gray-200 rounded-lg py-3 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Toyota Calya, Agya...">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-gray-400">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Filter by Type -->
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Tipe</h4>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox"
                                class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500"
                                checked>
                            <span class="text-gray-700">Mobil</span>
                        </label>
                        <label class="flex items-center space-x-3">
                            <input type="checkbox"
                                class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500">
                            <span class="text-gray-700">Motor</span>
                        </label>
                    </div>
                </div>
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Transmisi</h4>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox"
                                class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500"
                                checked>
                            <span class="text-gray-700">Manual</span>
                        </label>
                        <label class="flex items-center space-x-3">
                            <input type="checkbox"
                                class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500">
                            <span class="text-gray-700">Automatic</span>
                        </label>
                    </div>
                </div>

                {{--
                <!-- Filter by Color --> TIDAK DIGUNAKAN!
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Warna</h4>
                    <div class="flex flex-wrap gap-3">
                        <div class="color-option selected bg-red-500" title="Merah"></div>
                        <div class="color-option bg-blue-500" title="Biru"></div>
                        <div class="color-option bg-green-500" title="Hijau"></div>
                        <div class="color-option bg-yellow-500" title="Kuning"></div>
                        <div class="color-option bg-gray-300" title="Silver"></div>
                        <div class="color-option bg-black" title="Hitam"></div>
                        <div class="color-option bg-white border border-gray-200" title="Putih"></div>
                    </div>
                </div> --}}

                <!-- Filter by Year -->
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Tahun Pembuatan</h4>
                    <div class="flex items-center space-x-3">
                        <select
                            class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                            <option>2018</option>
                            <option>2019</option>
                            <option selected>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                        <span class="text-gray-500">s/d</span>
                        <select
                            class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option selected>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <button
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors shadow-sm flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    Terapkan Filter
                </button>

                <!-- Reset Filters link -->
                <div class="mt-3 text-center">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 hover:underline">Reset Semua
                        Filter</a>
                </div>
            </div>
        </div>

    </div>
</x-mitra-layout>