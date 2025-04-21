<x-user-layout title="Pembayaran">
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
            class="order-1 sm:order-1 sm:w-[65%] w-full h-fit bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h2m2 0h6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" />
                    </svg>
                </span>
                Pembayaran
            </h1>

            <h1 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                Pilih Metode Pembayaran
            </h1>
            <form action="{{ route('pembayaran.proses', ['id_pemesanan' => $pemesanan->id_pemesanan]) }}" method="POST">
                @csrf
                <div
                    class="p-6 bg-purple-50 rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="space-y-3">
                        @php
                            $groupedMethods = $paymentMethods->groupBy('jenis_metode');
                            $methodTypes = ['Transfer Bank', 'E-Wallet', 'Virtual Account'];
                        @endphp

                        @foreach ($methodTypes as $type)
                            @if (isset($groupedMethods[$type]) && $groupedMethods[$type]->isNotEmpty())
                                <div class="payment-method-group">
                                    <div
                                        class="flex items-center p-3 border border-gray-200 bg-gray-100 rounded-lg cursor-pointer hover:border-purple-500"
                                        onclick="toggleDropdown('{{ Str::slug($type) }}-dropdown')">
                                        <span class="text-sm font-medium text-gray-700 flex-1">{{ $type }}</span>
                                        <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-300"
                                            id="{{ Str::slug($type) }}-arrow" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                    <div id="{{ Str::slug($type) }}-dropdown"
                                        class="payment-method-dropdown hidden mt-2 space-y-2">
                                        @foreach ($groupedMethods[$type] as $method)
                                            <div
                                                class="flex items-center p-3 border border-gray-200 shadow-sm rounded-lg hover:border-purple-500 cursor-pointer">
                                                <input type="radio"
                                                    id="method-{{ $method->id_metode_pembayaran_platform }}"
                                                    name="payment_method"
                                                    class="h-4 w-4 text-purple-600 focus:ring-purple-500"
                                                    value="{{ $method->id_metode_pembayaran_platform }}"
                                                    {{ $loop->first && $type == $methodTypes[0] ? 'checked' : '' }}
                                                    required>
                                                <label for="method-{{ $method->id_metode_pembayaran_platform }}"
                                                    class="ml-3 block text-sm font-medium text-gray-700 w-full cursor-pointer">
                                                    {{ $method->nama_metode }}
                                                    <span class="block text-xs text-gray-500">
                                                        {{ $method->nomor_rekening_platform }}
                                                        @if ($method->nama_pemilik_platform)
                                                            ({{ $method->nama_pemilik_platform }})
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Lanjutkan Button -->
                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                        Lanjutkan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
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
                $totalAll = 0;
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

                            @foreach ($unitGroup as $detail)
                                @php
                                    $unitCost = $detail['unitCost'];
                                    $driverFee = $detail['driverFee'] ?? 0;
                                    $deliveryFee = $detail['deliveryFee'] ?? 0;
                                    $returnFee = $detail['returnFee'] ?? 0;
                                    $tipe_rental = $detail['tipe_penggunaan_sopir'];
                                    $subtotal = $unitCost + $deliveryFee + ($tipe_rental === 'dengan_sopir' ? $driverFee : 0) + $returnFee;
                                    $totalCost += $subtotal;
                                    $totalAll += $subtotal;
                                @endphp
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="text-gray-600">{{ $detail['unit']->nama_kendaraan }} x {{ $detail['duration'] }} hari</span>
                                    <span class="font-medium">Rp {{ number_format($unitCost, 0, ',', '.') }}</span>
                                </div>
                                @if ($deliveryFee > 0)
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="text-gray-600">Biaya Pengantaran</span>
                                        <span class="font-medium">Rp {{ number_format($deliveryFee, 0, ',', '.') }}</span>
                                    </div>
                                @endif
                                @if ($returnFee > 0)
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="text-gray-600">Biaya Pengembalian</span>
                                        <span class="font-medium">Rp {{ number_format($returnFee, 0, ',', '.') }}</span>
                                    </div>
                                @endif
                                @if ($tipe_rental === 'dengan_sopir')
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="text-gray-600">Biaya Sopir</span>
                                        <span class="font-medium">Rp {{ number_format($driverFee, 0, ',', '.') }}</span>
                                    </div>
                                @endif
                            @endforeach

                            <div class="flex justify-between font-bold text-lg mt-4">
                                <span>Harga Total</span>
                                <span class="text-purple-600">Rp {{ number_format($totalCost, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScript for Dropdown Toggle -->
    <script>
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const arrow = document.getElementById(`${dropdownId.replace('dropdown', 'arrow')}`);
            const isHidden = dropdown.classList.contains('hidden');

            // Close all other dropdowns
            document.querySelectorAll('.payment-method-dropdown').forEach((el) => {
                if (el.id !== dropdownId) {
                    el.classList.add('hidden');
                    const otherArrow = document.getElementById(`${el.id.replace('dropdown', 'arrow')}`);
                    if (otherArrow) otherArrow.classList.remove('rotate-180');
                }
            });

            // Toggle the selected dropdown
            if (isHidden) {
                dropdown.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            } else {
                dropdown.classList.add('hidden');
                arrow.classList.remove('rotate-180');
            }
        }
    </script>
</x-user-layout>