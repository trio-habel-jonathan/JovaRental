<x-mitra-layout title="Notifikasi">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow">
            <div class="border-b p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">NOTIFIKASI</h1>
                <button class="text-sm text-blue-500 hover:text-blue-700">Tandai semua sudah dibaca</button>
            </div>
            
            <div class="divide-y">
                <!-- Transfer dari Admin notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-purple-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-purple-600">Transfer dari Admin</h3>
                        <p class="text-sm text-gray-600">Admin telah mengirimkan dana sebesar Rp 1.500.000 ke rekening Anda.</p>
                        <p class="text-xs text-gray-400 mt-1">Baru saja</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Rental notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-green-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-green-600">Notifikasi Rental</h3>
                        <p class="text-sm text-gray-600">Anda menerima permintaan rental baru untuk "Mobil Toyota Avanza" dari pelanggan Ahmad Fauzi.</p>
                        <p class="text-xs text-gray-400 mt-1">5 menit yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Status Rental (Pending) notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-yellow-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-yellow-600">Status Rental: Pending</h3>
                        <p class="text-sm text-gray-600">Permintaan rental #R-2025-03-19-001 menunggu konfirmasi pembayaran Anda.</p>
                        <p class="text-xs text-gray-400 mt-1">15 menit yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Status Rental (Succeed) notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-green-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-green-600">Status Rental: Berhasil</h3>
                        <p class="text-sm text-gray-600">Permintaan rental #R-2025-03-18-005 telah berhasil dikonfirmasi dan siap digunakan.</p>
                        <p class="text-xs text-gray-400 mt-1">45 menit yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Success notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-green-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-green-600">Sukses</h3>
                        <p class="text-sm text-gray-600">Pembayaran berhasil dikonfirmasi! Pesanan Anda sedang diproses.</p>
                        <p class="text-xs text-gray-400 mt-1">2 jam yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Warning notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-yellow-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-yellow-600">Peringatan</h3>
                        <p class="text-sm text-gray-600">Permintaan rental #R-2025-03-17-002 akan dibatalkan jika tidak dikonfirmasi dalam 24 jam.</p>
                        <p class="text-xs text-gray-400 mt-1">3 jam yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Transfer dari Admin notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-purple-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-purple-600">Transfer dari Admin</h3>
                        <p class="text-sm text-gray-600">Admin telah mengirimkan dana sebesar Rp 2.750.000 ke rekening Anda sebagai pembayaran rental.</p>
                        <p class="text-xs text-gray-400 mt-1">6 jam yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Info notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-blue-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-blue-600">Info</h3>
                        <p class="text-sm text-gray-600">Jadwal pemeliharaan rutin kendaraan rental Anda jatuh pada tanggal 25 Maret 2025.</p>
                        <p class="text-xs text-gray-400 mt-1">1 hari yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Error notification -->
                <div class="p-4 flex gap-4 hover:bg-gray-50">
                    <div class="flex-shrink-0">
                        <div class="w-2 h-2 rounded-full bg-red-500 mt-2"></div>
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-medium text-red-600">Error</h3>
                        <p class="text-sm text-gray-600">Terjadi kesalahan saat memproses transaksi rental #R-2025-03-15-008.</p>
                        <p class="text-xs text-gray-400 mt-1">2 hari yang lalu</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t p-4 flex justify-center">
                <button class="text-sm text-blue-500 hover:text-blue-700">Lihat semua notifikasi</button>
            </div>
        </div>
    </div>
</x-mitra-layout>