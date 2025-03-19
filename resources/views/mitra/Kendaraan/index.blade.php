<x-mitra-layout title="Dashboard">
    <style>
        .car-image {
            height: 220px;
            object-fit: contain;
            background-color: #f8fafc;
        }
        
        .car-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .specs-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 1rem;
        }
        
        /* Color option styles */
        .color-option {
            width: 2rem;
            height: 2rem;
            border-radius: 9999px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .color-option:hover {
            transform: scale(1.1);
        }
        
        .color-option.selected {
            border: 2px solid #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
    </style>
    
    <div class="flex w-full">
        <!-- Main content - car listings (75% width) -->
        <div class="p-6 w-3/4">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Daftar Kendaraan</h2>
            
            <div class="grid grid-cols-1 gap-8">
                <!-- Toyota Calya Card -->
                <div class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left side with image -->
                        <div class="w-full md:w-2/5 p-4 bg-gray-50">
                            <img src="https://i.pinimg.com/736x/60/bb/2e/60bb2e33755e68d75546909abf92b7ed.jpg" alt="Toyota Calya" class="car-image w-full rounded-lg">
                            
                            <!-- Car Name and Badge -->
                            <div class="mt-4 flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-gray-800">Toyota Calya</h3>
                                <span class="text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Mobil</span>
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
                            
                            <div class="specs-container">
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 13v8"></path>
                                        <path d="M9 17l3 3l3 -3"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tenaga Mesin</p>
                                        <p class="text-base font-medium text-gray-800">1197 cc</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
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
                                    <span class="text-sm font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded">TYT-CLY-001</span>
                                </div>
                                
                                <div class="flex space-x-2">
                                    <button class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors font-medium flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors font-medium flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Toyota Agya Card -->
                <div class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left side with image -->
                        <div class="w-full md:w-2/5 p-4 bg-gray-50">
                            <img src="https://i.pinimg.com/736x/3d/5b/42/3d5b421063e7365d4cc86c08d45ee9bf.jpg" alt="Toyota Agya" class="car-image w-full rounded-lg">
                            
                            <!-- Car Name and Badge -->
                            <div class="mt-4 flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-gray-800">Toyota Agya</h3>
                                <span class="text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Mobil</span>
                            </div>
                            
                            <!-- Color -->
                            <div class="mt-3 flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white shadow"></div>
                                <p class="text-base font-medium text-gray-700">Silver</p>
                            </div>
                        </div>
                        
                        <!-- Right side with details -->
                        <div class="w-full md:w-3/5 p-6 bg-white">
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>
                            
                            <div class="specs-container">
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 13v8"></path>
                                        <path d="M9 17l3 3l3 -3"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tenaga Mesin</p>
                                        <p class="text-base font-medium text-gray-800">1000 cc</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Kapasitas Tempat Duduk</p>
                                        <p class="text-base font-medium text-gray-800">4 seat</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                                    <span class="text-sm font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded">TYT-AGY-001</span>
                                </div>
                                
                                <div class="flex space-x-2">
                                    <button class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors font-medium flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors font-medium flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            <!-- Kawasaki H2 -->
            <div class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                <div class="flex flex-col md:flex-row">
                    <!-- Left side with image -->
                    <div class="w-full md:w-2/5 p-4 bg-gray-50">
                        <img src="https://i.pinimg.com/736x/2e/f0/ed/2ef0ed2a81095d665bfec4077f7e261c.jpg" alt="Toyota Agya" class="car-image w-full rounded-lg">
                        
                        <!-- Car Name and Badge -->
                        <div class="mt-4 flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-gray-800">Kawasaki H2</h3>
                            <span class="text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Motor</span>
                        </div>
                        
                        <!-- Color -->
                        <div class="mt-3 flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white shadow"></div>
                            <p class="text-base font-medium text-Black-700">Black</p>
                        </div>
                    </div>
                    
                    <!-- Right side with details -->
                    <div class="w-full md:w-3/5 p-6 bg-white">
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>
                        
                        <div class="specs-container">
                            <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                    <path d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0"></path>
                                    <path d="M12 13v8"></path>
                                    <path d="M9 17l3 3l3 -3"></path>
                                </svg>
                                <div>
                                    <p class="text-xs text-gray-500">Tenaga Mesin</p>
                                    <p class="text-base font-medium text-gray-800">1000 cc</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                </svg>
                                <div>
                                    <p class="text-xs text-gray-500">Kapasitas Tempat Duduk</p>
                                    <p class="text-base font-medium text-gray-800">4 seat</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                                <span class="text-sm font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded">TYT-AGY-001</span>
                            </div>
                            
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                    Edit
                                </button>
                                <button class="px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Sidebar - Search and Filters (25% width) -->
        <div class="w-1/4 p-6 mt-[4rem]">
            <div class="sticky top-10 bg-white rounded-xl shadow-md border border-gray-100 p-5">
                <h3 class="text-xl font-bold text-gray-800 mb-5">Cari & Filter</h3>
                
                <!-- Search Box -->
                <div class="mb-6">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari Kendaraan</label>
                    <div class="relative">
                        <input type="text" id="search" class="w-full bg-gray-50 border border-gray-200 rounded-lg py-3 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Toyota Calya, Agya...">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
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
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500" checked>
                            <span class="text-gray-700">Mobil</span>
                        </label>
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500">
                            <span class="text-gray-700">Motor</span>
                        </label>
                    </div>
                </div>
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Transmisi</h4>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500" checked>
                            <span class="text-gray-700">Manual</span>
                        </label>
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-300 focus:ring-blue-500">
                            <span class="text-gray-700">Automatic</span>
                        </label>
                    </div>
                </div>
                
                <!-- Filter by Color -->
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
                </div>
                
                <!-- Filter by Year -->
                <div class="mb-6">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">Tahun Pembuatan</h4>
                    <div class="flex items-center space-x-3">
                        <select class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                            <option>2018</option>
                            <option>2019</option>
                            <option selected>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                        <span class="text-gray-500">s/d</span>
                        <select class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
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
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors shadow-sm flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    Terapkan Filter
                </button>
                
                <!-- Reset Filters link -->
                <div class="mt-3 text-center">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 hover:underline">Reset Semua Filter</a>
                </div>
            </div>
        </div>
    </div>
</x-mitra-layout>