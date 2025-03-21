<x-mitra-layout title="Infromasi Supir">
    <div class="p-4">
        <!-- Filter dan Pencarian -->
        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <div class="flex flex-col md:flex-row justify-between gap-4">
                <div class="relative">
                    <input type="text" placeholder="Cari supir..."
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex gap-3">
                    <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Status Supir</option>
                        <option value="available">Available</option>
                        <option value="non-available">Non Available</option>
                    </select>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Filter</button>
                </div>
            </div>
        </div>
    
        <!-- Daftar Supir - Redesain Style ID Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @for ($i = 0; $i < 8; $i++)
                <!-- Supir 1 - Available -->
    
                <div class="bg-transparent rounded-xl overflow-hidden h-full relative">
                    <div
                        class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-primary rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                        <span class="text-xs font-bold text-white">ID</span>
                    </div>
    
                    <!-- Content -->
                    <div class="pt-10 pb-4 px-4 flex flex-col bg-white items-center mt-6 rounded-xl">
                        <!-- Profile Photo -->
                        <div class="w-24 h-24 rounded-full border-4 border-teal-100 overflow-hidden bg-teal-50 mb-3">
                            <img src="https://i.pinimg.com/736x/87/e5/d1/87e5d177fcfb42604f95025dce39bff7.jpg"
                                alt="Foto Supir" class="w-full h-full object-cover">
                        </div>
    
                        <!-- Name and Title -->
                        <h2 class="text-xl font-bold text-gray-800 mb-1">Budi Santoso</h2>
                        <p class="text-sm text-gray-500 mb-4">DRIVER - ID: DRV-001</p>
    
                        <!-- Divider -->
                        <div class="w-full border-t border-gray-200 mb-4"></div>
    
                        <!-- Details -->
                        <div class="w-full space-y-2 text-sm">
                            <div class="flex">
                                <span class="font-semibold w-16">No. HP:</span>
                                <span>081234567890</span>
                            </div>
                            <div class="flex">
                                <span class="font-semibold w-16">Alamat:</span>
                                <span class="flex-1">Jl. Merdeka No. 123, Jakarta</span>
                            </div>
                            <div class="flex">
                                <span class="font-semibold w-16">No. SIM:</span>
                                <span>98765432100</span>
                            </div>
                            <div class="flex">
                                <span class="font-semibold w-16">Status:</span>
                                <span class="text-green-500 font-medium">Available</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Bottom curved design -->
                    <div class="h-12 bg-primary mt-2 rounded-xl"></div>
    
                    <!-- Buttons with Icons -->
                    <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-4 px-4">
                        <button onclick="window.location.href='{{ route('mitra.supir.editsupir') }}'" class="bg-white text-primary p-2 rounded-full hover:text-white hover:bg-blue-500 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                        <button onclick="window.location.href='{{ route('mitra.supir.editsupir') }}'" class="bg-white text-primary p-2 rounded-full hover:text-white hover:bg-yellow-500 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>                        
                        <button class="bg-white text-primary p-2 rounded-full hover:text-white hover:bg-red-500 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endfor
    
        </div>
    
        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <div class="flex space-x-1">
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Prev</button>
                <button class="px-3 py-1 bg-blue-500 text-white rounded-md">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">2</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">3</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Next</button>
            </div>
        </div>
    </div>
</x-mitra-layout>
