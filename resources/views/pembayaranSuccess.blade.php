<x-user-layout title="Pembayaran Berhasil">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>

            <!-- Progress Line (100% untuk langkah Selesai) -->
            <div
                class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-primary to-indigo-600 rounded-full w-full">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-primary">Pesan</div>
                </div>

                <!-- Step 2: Review -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        2
                    </div>
                    <div class="mt-3 text-sm font-semibold text-primary">Review</div>
                </div>

                <!-- Step 3: Bayar -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        3
                    </div>
                    <div class="mt-3 text-sm font-semibold text-primary">Bayar</div>
                </div>

                <!-- Step 4: Selesai -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                        4
                    </div>
                    <div class="mt-3 text-sm font-semibold text-primary">Selesai</div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row w-full min-h-screen gap-4 p-4 mt-8">
        <!-- Sisi Kiri (Success Message) -->
        <div
            class="order-1 sm:order-1 sm:w-[65%] w-full h-fit bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                </span>
                Pembayaran Berhasil
            </h1>
            <div
                class="p-6 bg-gradient-to-r from-green-100 to-green-50 rounded-2xl transition-all mb-6 border border-green-200">
                <div class="border-l-4 border-green-500 pl-4">
                    <p class="text-gray-600 font-medium mb-1">Status Pemesanan Anda:</p>
                    <p class="text-green-600 font-semibold text-lg">Bukti Pembayaran Diterima, Menunggu Verifikasi</p>
                </div>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <p class="text-gray-600 mb-4">Terima kasih telah mengunggah bukti pembayaran. Tim kami akan memverifikasi dalam waktu 1x24 jam.</p>
                <p class="text-gray-600">Anda akan menerima notifikasi setelah pembayaran diverifikasi.</p>
                <div class="mt-6 flex justify-end">
                    <a href="{{ route('home') }}"
                        class="bg-primary hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                        Kembali ke Dashboard
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[35%] bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
                <span class="text-primary text-sm font-medium">ID: {{ $pemesanan->id_pemesanan }}</span>
            </div>

            @php
                $groupedUnits = $rentalDetails->groupBy(function ($detail) {
                    return $detail['startDateTime'] . '|' . $detail['endDateTime'];
                });
            @endphp

            @foreach ($groupedUnits as $periode => $unitGroup)
                @php
                    [$startDate, $endDate] = explode('|', $periode);
                    $startDateTime = \Carbon\Carbon::parse($startDate);
                    $endDateTime = \Carbon\Carbon::parse($endDate);
                @endphp

                <div
                    class="rounded-xl p-6 space-y-4 text-gray-800 border border-gray-100 mt-4 hover:shadow-lg transition-all">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="bg-primary/20 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                    class="text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-normal lg:text-xl font-bold text-gray-800">
                                    {{ $unitGroup->first()['unit']->nama_mitra }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    @if ($unitGroup->first()['unit']->alamat_mitra)
                                        {{ $unitGroup->first()['unit']->alamat_mitra->alamat }},
                                        {{ $unitGroup->first()['unit']->alamat_mitra->kota }},
                                        {{ $unitGroup->first()['unit']->alamat_mitra->provinsi }}
                                    @else
                                        Lokasi Tidak Tersedia
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white plus-jakarta-sans-font p-4 rounded-lg space-y-4 mt-2">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-primary/20 p-1.5 rounded-md">
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
                                <p class="text-gray-600">{{ $unitGroup->first()['unit']->kota_mitra }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-primary/20 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                                <p class="text-gray-600">{{ $startDateTime->format('D, d M Y') }}</p>
                                <p class="text-sm text-primary font-medium">{{ $startDateTime->format('H:i') }} WIB</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-primary/20 p-1.5 rounded-md">
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
                                <p class="text-gray-600">{{ $unitGroup->first()['lokasi_pengambilan'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-primary/20 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                                <p class="text-gray-600">{{ $endDateTime->format('D, d M Y') }}</p>
                                <p class="text-sm text-primary font-medium">{{ $endDateTime->format('H:i') }} WIB</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-primary/20 p-1.5 rounded-md">
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
                                <p class="text-gray-600">{{ $unitGroup->first()['lokasi_pengembalian'] }}</p>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-4 mt-2">
                            <div class="text-center mb-1">
                                <span class="font-bold text-lg">{{ $entitasPenyewa->nama_entitas }}</span>
                            </div>
                            <div class="text-center mb-4">
                                <span class="font-semibold text-normal">+62 {{ $user->no_telepon }}</span>
                            </div>
                            <div class="text-center mt-4">
                                <div class="inline-flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <span class="text-green-600 ml-1">Bisa Refund</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Tambahan Detail Pembayaran -->
            <div
                class="rounded-xl p-6 space-y-4 text-gray-800 border border-gray-100 mt-4 hover:shadow-lg transition-all">
                <h3 class="text-lg font-bold text-gray-800">Detail Pembayaran</h3>
                <div class="flex justify-between">
                    <span class="text-gray-600">Total Bayar</span>
                    <span class="font-semibold">{{ number_format($pembayaran->total_bayar, 2, ',', '.') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Status Pembayaran</span>
                    <span class="text-green-600 font-semibold">{{ ucfirst($pembayaran->status_pembayaran) }}</span>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>