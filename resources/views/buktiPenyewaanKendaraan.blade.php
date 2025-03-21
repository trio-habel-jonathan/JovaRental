<x-user-layout title="review">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-gray-100 rounded-full"></div>

            <!-- Progress Line (Set to 100% for Selesai step) -->
            <div class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full"
                style="width: 100%">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan (Completed) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>

                <!-- Step 2: Review (Completed) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        2
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Review</div>
                </div>

                <!-- Step 3: Bayar (Completed) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        3
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Bayar</div>
                </div>

                <!-- Step 4: Selesai (Active) -->
                <div class="step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        4
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Selesai</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Centered and Wider Card Container -->
    <div class="w-full flex justify-center px-5 mt-8 mb-8">
        <div class="w-full lg:w-3/4 md:w-5/6 bg-white rounded-xl shadow-2xl overflow-hidden">
            <!-- Card Header with Company Logo and Info -->
            <div class="bg-primary p-4 flex justify-between items-center">
                <div>
                    <h2 class="text-white font-bold text-xl">JovaRental</h2>
                    <p class="text-purple-100 text-sm">Bukti Penyewaan Kendaraan</p>
                </div>
                <!-- Paid Status Badge -->
                <div
                    class="flex items-center bg-gradient-to-r from-green-400 to-green-500 text-white px-4 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm font-bold tracking-wide">Lunas</span>
                </div>
            </div>

            <!-- Rental Details -->
            <div class="p-6 bg-white">
                <!-- Receipt Number and Date -->
                <div class="flex justify-between mb-6">
                    <div>
                        <p class="text-gray-500 text-xs">NO PEMESANAN.</p>
                        <p class="font-semibold">VR-2025-0321</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs">TANGGAL</p>
                        <p class="font-semibold">Maret 21, 2025</p>
                    </div>
                </div>

                <!-- Vehicle Information -->
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xs uppercase tracking-wider mb-2">DETAIL KENDARAAN</h3>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <div>
                            <div class="flex gap-2">
                                <p class="font-bold text-lg">Toyota Camry 2.5L</p>
                                <span
                                    class="bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-full">Automatic</span>
                            </div>
                            <p class="text-gray-600">Lisensi: B 1234 CD</p>
                        </div>
                    </div>
                </div>

                <!-- Rental Period -->
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h3 class="text-gray-500 text-xs uppercase tracking-wider mb-2">Periode Rental</h3>
                    <div class="flex justify-between text-sm">
                        <div>
                            <p class="text-gray-500">Diambil</p>
                            <p class="font-semibold">Mar 21, 2025 · 10:00 AM</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Dikembalikan</p>
                            <p class="font-semibold">Mar 24, 2025 · 10:00 AM</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Durasi</p>
                            <p class="font-semibold">3 Hari</p>
                        </div>
                    </div>
                </div>

                <!-- Customer Information -->
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xs uppercase tracking-wider mb-2">INFORMASI PEMESAN</h3>
                    <p class="font-semibold">M Habib Abdillah</p>
                    <p class="text-gray-600 text-sm">+62 812-3456-7890</p>
                </div>

                <!-- Payment Summary -->
                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-gray-500 text-xs uppercase tracking-wider mb-2">Pembayaran</h3>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Biaya Rental (3 hari)</span>
                        <span>Rp 1,110,000</span>
                    </div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Pengembalian di Lokasi Lain</span>
                        <span>Rp 100,000</span>
                    </div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Biaya Layanan</span>
                        <span>Rp 10,000</span>
                    </div>
                    <div class="flex justify-between font-bold">
                        <span>TOTAL</span>
                        <span>Rp 1,220,000</span>
                    </div>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="px-6 py-4 bg-gray-100 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <div class="text-xs text-gray-500">
                        <p>Metode Pembayaran: Transfer Bank ( BCA )</p>
                        <p>Terima kasih sudah memilih JovaRental</p>
                    </div>
                    <div class="flex gap-4">
                        <button href="#" class="bg-purple-600 text-white py-2 px-4 rounded-lg text-sm font-medium" onclick="window.print()">
                            Print
                        </button>
                        <a href="{{ route('home') }}" class="bg-purple-600 text-white py-2 px-4 rounded-lg text-sm font-medium">
                            Konfirmasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-user-layout>