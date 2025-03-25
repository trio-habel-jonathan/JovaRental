<div class="flex h-screen sticky top-0">
    <!-- Sidebar -->
    <div class="w-64 h-screen bg-white p-5 border-r border-gray-200 flex flex-col overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center px-2 mb-6">
            <div class="text-indigo-600 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
            </div>
            <div class="font-semibold text-gray-800">JovaRental</div>
        </div>

        <!-- Navigation -->
        <div class="flex flex-col space-y-1">
            <!-- Dashboard -->
            <a href="{{ route('mitra.indexView') }}"
                class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="3" rx="2" />
                        <line x1="8" x2="16" y1="21" y2="21" />
                        <line x1="12" x2="12" y1="17" y2="21" />
                    </svg>
                </div>
                <p class="text-gray-600 text-sm flex-1">Dashboard</p>
            </a>

            <!-- Pesanan -->
            <div class="group">
                <div id="pesanan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                            <path d="M9 14h6" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Pesanan</div>
                    <div id="pesanan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="pesanan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{ route('mitra.pesanan.pesananmitraView') }}"
                        class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar Pesanan</a>
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Buat Pesanan</a>
                </div>
            </div>

            <!-- Kendaraan -->
            <div class="group">
                <div id="kendaraan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                            <circle cx="7" cy="17" r="2" />
                            <path d="M9 17h6" />
                            <circle cx="17" cy="17" r="2" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Kendaraan</div>
                    <div id="kendaraan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="kendaraan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{ route('mitra.kendaraan.kendaraanmitraView') }}"
                        class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar
                        Kendaraan</a>
                    <a href="{{ route('mitra.kendaraan.tambahkendaraanView') }}"
                        class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Tambah
                        Kendaraan</a>
                </div>
            </div>

            <!-- Keuangan -->
            <div class="group">
                <div id="keuangan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Keuangan</div>
                    <div id="keuangan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="keuangan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{route ('mitra.keuangan.index')}}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Laporan
                        Keuangan</a>
                    <a href="{{route ('mitra.keuangan.pengeluaran')}}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Pengeluaran</a>
                    <a href="{{route ('mitra.keuangan.pemasukan')}}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Pendapatan</a>
                </div>
            </div>

            <!-- Supir -->
            <div class="group">
                <div id="supir-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Supir</div>
                    <div id="supir-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="supir-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{ route('mitra.supir.supirmitraView') }}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar Supir</a>
                    <a href="{{ route('mitra.supir.tambahsupir') }}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Tambah Supir</a>

                </div>
            </div>
        </div>

        <div class="mt-auto">
            <!-- Logout -->
            <div class="flex items-center px-4 py-3 rounded-lg text-red-500 cursor-pointer hover:bg-red-50 mt-6">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </div>
                <div class="text-sm">Logout</div>
            </div>
        </div>
    </div>
</div>
