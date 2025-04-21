<x-user-layout title="Petunjuk Pembayaran">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <!-- Background Line -->
            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>

            <!-- Progress Line (66% for Bayar step) -->
            <div
                class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-[66%]">
            </div>

            <!-- Steps -->
            <div class="flex justify-between relative">
                <!-- Step 1: Pesan -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        1
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>

                <!-- Step 2: Review -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        2
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Review</div>
                </div>

                <!-- Step 3: Bayar -->
                <div class="step active-step flex flex-col items-center">
                    <div
                        class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                        3
                    </div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Bayar</div>
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
        <!-- Left Side (Form Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[65%] w-full bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h2m2 0h6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" />
                    </svg>
                </span>
                Petunjuk Pembayaran
            </h1>

            <h1 class="text-xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                <span
                    class="border border-purple-600 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">1</span>
                Selesaikan pembayaran sebelum
            </h1>
            <div
                class="p-6 bg-purple-50 rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="border-gray-200">
                    <p>{{ $deadline->format('D, d M Y H:i') }} WIB</p>
                    <p>Selesaikan pembayaran dalam 24 jam</p>
                </div>
            </div>

            <h1 class="text-xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                <span
                    class="border border-purple-600 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">2</span>
                Mohon Transfer ke
            </h1>
            <div
                class="p-6 bg-purple-50 rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="border-gray-200">
                    <h3 class="text-xl font-bold text-purple-800 mb-4 border-b text-center py-2">{{ $paymentMethod->nama_metode }}</h3>
                    <div class="flex justify-between py-2 mb-2">
                        <p class="text-gray-600">No. Rekening</p>
                        <p class="font-medium text-gray-800">{{ $paymentMethod->nomor_rekening_platform }}</p>
                    </div>
                    <div class="flex justify-between py-2 mb-2">
                        <p class="text-gray-600">Nama Penerima</p>
                        <p class="font-medium text-gray-800">{{ $paymentMethod->nama_pemilik_platform ?? 'N/A' }}</p>
                    </div>
                    <div class="flex justify-between py-2">
                        <p class="text-gray-600">Jumlah Transfer</p>
                        <p class="font-medium text-green-600">Rp {{ number_format($totalAll, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <h1 class="text-xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                <span
                    class="border border-purple-600 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">3</span>
                Anda Sudah Membayar?
            </h1>
           <!-- Ganti bagian tombol -->
<div class="flex justify-start gap-4 mt-6">
    <form action="{{ route('pembayaran.upload', ['id_pemesanan' => $pemesanan->id_pemesanan]) }}" method="GET">
        @csrf
        <input type="hidden" name="payment_method" value="{{ $paymentMethod->id_metode_pembayaran_platform }}">
        <button type="submit"
            class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
            Sudah
        </button>
    </form>
    <a href="{{ route('pembayaran', ['id_pemesanan' => $pemesanan->id_pemesanan]) }}"
        class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
        Belum
    </a>
</div>
        </div>

        <!-- Right Side (Summary Section) -->
        <div
            class="order-1 sm:order-1 sm:w-[35%] bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
                <span class="text-purple-600 text-sm font-medium">ID: {{ $pemesanan->id_pemesanan }}</span>
            </div>

            @php
                $groupedUnits = $rentalDetails->groupBy(function ($detail) {
                    return $detail['startDateTime']->format('Y-m-d H:i') . '|' . $detail['endDateTime']->format('Y-m-d H:i');
                });
            @endphp

            @foreach ($groupedUnits as $periode => $unitGroup)
                @php
                    [$startDate, $endDate] = explode('|', $periode);
                    $startDateTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', $startDate);
                    $endDateTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', $endDate);
                    $totalCost = 0;
                @endphp

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
                                <h3 class="text-normal lg:text-xl font-bold text-gray-800">{{ $unitGroup->first()['unit']->nama_mitra }}</h3>
                                <p class="text-sm text-gray-500">
                                    @if ($unitGroup->first()['unit']->alamat_mitra)
                                        {{ $unitGroup->first()['unit']->alamat_mitra->alamat }},
                                        {{ $unitGroup->first()['unit']->alamat_mitra->kota }},
                                        {{ $unitGroup->first()['unit']->alamat_mitra->kecamatan }},
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
                            <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
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
                            <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                                <p class="text-gray-600">{{ $startDateTime->format('D, d M Y') }}</p>
                                <p class="text-sm text-purple-600 font-medium">{{ $startDateTime->format('H:i') }} WIB</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
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
                            <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                                <p class="text-gray-600">{{ $endDateTime->format('D, d M Y') }}</p>
                                <p class="text-sm text-purple-600 font-medium">{{ $endDateTime->format('H:i') }} WIB</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none"
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
        </div>
    </div>
</x-user-layout>