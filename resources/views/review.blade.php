<x-user-layout title="Review Pemesanan">
    <div class="px-16">
        <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
            <!-- Bilah Progres -->
            <div class="relative">
                <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>
                <div
                    class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-[33%]">
                </div>
                <div class="flex justify-between relative">
                    <div class="step active-step flex flex-col items-center">
                        <div
                            class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                            1</div>
                        <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                    </div>
                    <div class="step active-step flex flex-col items-center">
                        <div
                            class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">
                            2</div>
                        <div class="mt-3 text-sm font-semibold text-purple-600">Review</div>
                    </div>
                    <div class="step flex flex-col items-center">
                        <div
                            class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                            3</div>
                        <div class="mt-3 text-sm font-medium text-gray-500">Bayar</div>
                    </div>
                    <div class="step flex flex-col items-center">
                        <div
                            class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">
                            4</div>
                        <div class="mt-3 text-sm font-medium text-gray-500">Selesai</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row w-full min-h-screen gap-4 p-4 mt-8">
            <!-- Sisi Kiri (Bagian Formulir) -->
            <div
                class="order-1 sm:w-full w-full h-fit rounded-md bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
                <!-- Pesanan Sewa -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </span>
                    Pesanan Sewa
                </h1>
                <div
                    class="pr-2 flex flex-col gap-4 py-4 bg-white transition-all h-96 overflow-auto custom-scrollbar mb-6">
                    @foreach ($rentalDetails as $id_unit => $detail)
                        @php
                            $unit = $detail['unit'];
                            $lokasi_pengambilan = $detail['lokasi_pengambilan'];
                            $lokasi_pengembalian = $detail['lokasi_pengembalian'];
                            $startDateTime = $detail['startDateTime'];
                            $endDateTime = $detail['endDateTime'];
                            $unitCost = $detail['unitCost'];
                            $driverFee = $detail['driverFee'] ?? 0;
                            $deliveryFee = $detail['deliveryFee'] ?? 0;
                            $returnFee = $detail['returnFee'] ?? 0;

                            $tipe_rental = $detail['tipe_penggunaan_sopir'] ?? 'tanpa_sopir';
                            $total = $unitCost + $deliveryFee + ($tipe_rental === 'dengan_sopir' ? $driverFee : 0);
                        @endphp
                        <div class="border space-y-4 relative w-full shadow-lg p-4 rounded-md">
                            <div class="flex gap-4">
                                <div class="w-60 h-36 aspect-square">
                                    @if ($unit->fotos)
                                        @php $photos = json_decode($unit->fotos) @endphp
                                        @if (count($photos) > 0)
                                            <img class="w-full h-full object-cover rounded-md"
                                                src="{{ asset('/kendaraan/' . $photos[0]) }}"
                                                alt="{{ $unit->nama_kendaraan }}">
                                        @else
                                            <img class="w-full h-full object-cover rounded-md"
                                                src="https://via.placeholder.com/150" alt="Gambar Tidak Tersedia">
                                        @endif
                                    @else
                                        <img class="w-full h-full object-cover rounded-md"
                                            src="https://via.placeholder.com/150" alt="Gambar Tidak Tersedia">
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <div class="space-y-2">
                                        <h1 class="font-bold montserrat-font text-xl">{{ $unit->nama_kendaraan }}</h1>
                                        <div class="w-full flex flex-col flex-wrap gap-1">
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Tipe Sewa</p>
                                                <p class="font-bold montserrat-font">
                                                    {{ $tipe_rental === 'tanpa_sopir' ? 'Lepas Kunci' : 'Dengan Sopir' }}
                                                </p>
                                            </div>
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Metode Pengantaran</p>
                                                {{-- <p class="font-bold montserrat-font">{{ $lokasi_pengambilan instanceof \App\Models\AlamatMitra ? 'Diambil di Tempat' : 'Diantar' }}</p> --}}
                                            </div>
                                            @if ($tipe_rental === 'dengan_sopir')
                                                <div class="text-xs flex gap-2">
                                                    <p class="font-medium text-gray-500">Penggunaan Sopir</p>
                                                    <p class="font-bold montserrat-font">Sepanjang Hari</p>
                                                </div>
                                            @endif
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Periode Sewa</p>
                                                <p class="font-bold montserrat-font">
                                                    {{ $startDateTime->format('d M Y H:i') }} -
                                                    {{ $endDateTime->format('d M Y H:i') }}</p>
                                            </div>
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Lokasi Pengambilan</p>
                                                <p class="font-bold montserrat-font">{{ $lokasi_pengambilan }}</p>

                                            </div>
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Lokasi Pengembalian</p>
                                                <p class="font-bold montserrat-font">{{ $lokasi_pengembalian }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-100 border border-gray-200 p-2 flex justify-between items-center rounded-md mt-4">
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Harga Kendaraan</p>
                                            <p class="montserrat-font font-bold">Rp
                                                {{ number_format($unitCost, 0, ',', '.') }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Biaya Pengantaran</p>
                                            <p class="montserrat-font font-bold">Rp
                                                {{ number_format($deliveryFee, 0, ',', '.') }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Biaya Pengembalian</p>
                                            <p class="montserrat-font font-bold">Rp
                                                {{ number_format($returnFee, 0, ',', '.') }}</p>
                                        </div>
                                        @if ($tipe_rental === 'dengan_sopir')
                                            <div>
                                                <p class="text-xs text-gray-700 font-medium">Biaya Sopir</p>
                                                <p class="montserrat-font font-bold">Rp
                                                    {{ number_format($driverFee, 0, ',', '.') }}</p>
                                            </div>
                                        @endif
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Total</p>
                                            <p class="montserrat-font font-bold">Rp
                                                {{ number_format($total, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Data Pemesan -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    Data Pemesan
                </h1>
                <div
                    class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <label class="block mb-2 text-base font-medium text-gray-700">Nama Entitas</label>
                            <input type="text" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100"
                                value="{{ $entitasPenyewa->nama_entitas ?? 'Nama Entitas' }}" readonly>
                        </div>
                        <div class="flex-1">
                            <label class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                <input type="tel"
                                    class="w-full p-3 pl-12 border border-gray-200 rounded-lg bg-gray-100"
                                    value="{{ $user->no_telepon ?? '0812345678' }}" readonly>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label class="block mb-2 text-base font-medium text-gray-700">Email Entitas</label>
                            <input type="text" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100"
                                value="{{ $user->email ?? 'email@entitas.com' }}" readonly>
                        </div>
                    </div>
                    @if ($entitasPenyewa && $entitasPenyewa->tipe_entitas === 'perusahaan')
                        <div class="flex flex-col md:flex-row gap-5 w-full mt-6">
                            <div class="flex-1">
                                <label class="block mb-2 text-base font-medium text-gray-700">Nama Perwakilan</label>
                                <input type="text" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100"
                                    value="{{ $pemesanan->perwakilan_penyewa ?? 'Tidak Ada' }}" readonly>
                            </div>
                            <div class="flex-1">
                                <label class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon
                                    Perwakilan</label>
                                <div class="relative">
                                    <span
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                    <input type="tel"
                                        class="w-full p-3 pl-12 border border-gray-200 rounded-lg bg-gray-100"
                                        value="{{ $pemesanan->kontak_perwakilan ?? 'Tidak Ada' }}" readonly>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                            <!-- Data Pengemudi -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    Data Pengemudi
                </h1>
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    @foreach ($rentalDetails as $id_unit => $detail)
                        <div class="mb-4 border border-gray-200 shadow-md p-2 rounded-md">
                            <h3 class="text-lg font-bold montserrat-font text-gray-800 mb-2">
                                {{ $detail['unit']->nama_kendaraan }}
                            </h3>
                            @if ($detail['tipe_penggunaan_sopir'] === 'tanpa_sopir')
                                <!-- Untuk tanpa sopir -->
                                <div class="flex flex-col md:flex-row gap-5 w-full">
                                    <div class="flex-1">
                                        <label class="block mb-2 text-base font-medium text-gray-700">Nama Lengkap</label>
                                        <input type="text" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100"
                                            value="{{ $detail['driver_nama'] ?? 'Tidak Ada' }}" readonly>
                                    </div>
                                    <div class="flex-1">
                                        <label class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                            <input type="tel" class="w-full p-3 pl-12 border border-gray-200 rounded-lg bg-gray-100"
                                                value="{{ $detail['driver_telepon'] ?? 'Tidak Ada' }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Untuk dengan sopir -->
                                @if ($detail['driver_nama'] && $detail['driver_telepon'])
                                    <div class="flex flex-col md:flex-row gap-5 w-full">
                                        <div class="flex-1">
                                            <label class="block mb-2 text-base font-medium text-gray-700">Nama Lengkap</label>
                                            <input type="text" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100"
                                                value="{{ $detail['driver_nama'] }}" readonly>
                                        </div>
                                        <div class="flex-1">
                                            <label class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                                <input type="tel" class="w-full p-3 pl-12 border border-gray-200 rounded-lg bg-gray-100"
                                                    value="{{ $detail['driver_telepon'] }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <p class="font-medium montserrat-font text-lg">Info:</p>
                                        <p>Informasi pengemudi belum dapat ditampilkan karena pesanan belum diselesaikan.
                                            Silakan selesaikan proses pemesanan dan lakukan pembayaran terlebih dahulu.
                                            Setelah pembayaran dikonfirmasi dan mitra menyetujui pesanan Anda, informasi
                                            pengemudi akan tersedia secara otomatis.</p>
                                    </div>
                                @endif
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Detail Sewa</h1>
                </div>

                <!-- Kelompokkan berdasarkan periode -->
                @php
                    $groupedUnits = collect($rentalDetails)->groupBy(function ($detail) {
                        return $detail['startDateTime']->format('Y-m-d H:i') .
                            '|' .
                            $detail['endDateTime']->format('Y-m-d H:i');
                    });
                    $totalAll = 0;
                @endphp

                @foreach ($groupedUnits as $periode => $unitGroup)
                    @php
                        [$startDate, $endDate] = explode('|', $periode);
                        $startDateTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', $startDate);
                        $endDateTime = Carbon\Carbon::createFromFormat('Y-m-d H:i', $endDate);
                        $duration = $startDateTime->diffInDays($endDateTime) + 1;
                        $totalCost = 0;
                    @endphp

                    <div class="mb-8 border-b pb-6">
                        <!-- Daftar Kendaraan -->
                        @foreach ($unitGroup as $detail)
                            @php
                                $unit = $detail['unit'];
                                $unitCost = $detail['unitCost'];
                                $driverFee = $detail['driverFee'] ?? 0;
                                $deliveryFee = $detail['deliveryFee'] ?? 0;
                                $returnFee = $detail['returnFee'] ?? 0;
                                $tipe_rental = $detail['tipe_penggunaan_sopir'];
                                $subtotal =
                                    $unitCost + $deliveryFee + ($tipe_rental === 'dengan_sopir' ? $driverFee : 0);
                                $totalCost += $subtotal;
                                $totalAll += $subtotal;
                            @endphp
                            <div class="mb-6">


                                <!-- Informasi Mitra -->
                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Mitra</h3>
                                    <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg shadow-sm">
                                        <div class="bg-purple-100 p-2 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">{{ $unit->nama_mitra }}</h4>
                                            <p class="text-sm text-gray-600">
                                                @if ($unit->alamat_mitra)
                                                    {{ $unit->alamat_mitra->alamat }},
                                                    {{ $unit->alamat_mitra->kota }},
                                                    {{ $unit->alamat_mitra->kecamatan }},
                                                    {{ $unit->alamat_mitra->provinsi }}
                                                @else
                                                    Lokasi Tidak Tersedia
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                        <!-- Total Harga untuk Periode Ini -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Total Harga</h3>
                            <div class="p-4 bg-purple-50 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.657 0 3 .895 3 2s-1.343 2-3 2m0 0c-1.657 0-3 .895-3 2s1.343 2 3 2m-6 0V5m12 14v-4" />
                                        </svg>
                                        <p class="text-lg font-semibold text-gray-800">Rp
                                            {{ number_format($totalCost, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                                @foreach ($unitGroup as $detail)
                                    @if ($detail['tipe_penggunaan_sopir'] === 'dengan_sopir')
                                        <p class="text-sm text-gray-600 mt-2">Termasuk biaya sopir Rp
                                            {{ number_format($detail['driverFee'], 0, ',', '.') }}/kendaraan</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Total Keseluruhan -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Total Keseluruhan</h3>
                    <div class="p-4 bg-purple-100 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.657 0 3 .895 3 2s-1.343 2-3 2m0 0c-1.657 0-3 .895-3 2s1.343 2 3 2m-6 0V5m12 14v-4" />
                                </svg>
                                <p class="text-xl font-bold text-gray-800">Rp
                                    {{ number_format($totalAll, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('pembayaran', ['id_pemesanan' =>$pemesanan->id_pemesanan]) }}"
                        class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                        Lanjutkan
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
    </div>

</x-user-layout>
