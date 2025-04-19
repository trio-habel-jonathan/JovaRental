
<x-user-layout title="Review Pemesanan">
    
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
      
        <div class="relative">

            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>
            <div class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-[33%]"></div>
            <div class="flex justify-between relative">
                <div class="step active-step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">1</div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>
                <div class="step active-step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">2</div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Review</div>
                </div>
                <div class="step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">3</div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Bayar</div>
                </div>
                <div class="step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">4</div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Selesai</div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row w-full min-h-screen gap-4 p-4 mt-8">
        <!-- Sisi Kiri (Form Section) -->
        <div class="order-1 sm:w-[65%] w-full rounded-md bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <!-- Pesanan Rental -->
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </span>
                Pesanan Rental
            </h1>
            <div class="pr-2 flex flex-col gap-4 py-4 bg-white transition-all h-96 overflow-auto custom-scrollbar mb-6">
                @foreach ($rentalDetails as $id_unit => $detail)
                    @php
                        $unit = $detail['unit'];
                        $lokasi_pengambilan = $detail['lokasi_pengambilan'];
                        $lokasi_pengembalian = $detail['lokasi_pengembalian'];
                        $startDateTime = $detail['startDateTime'];
                        $endDateTime = $detail['endDateTime'];
                        $unitCost = $detail['unitCost'];
                        $driverFee = $detail['driverFee'] ?? 0;
                        $deliveryFee = $lokasi_pengambilan instanceof \App\Models\AlamatMitra ? 0 : 15000; // Contoh biaya pengantaran
                        $total = $unitCost + $deliveryFee + ($tipe_rental === 'dengan_sopir' ? $driverFee : 0);
                    @endphp
                    <div class="border space-y-4 relative w-full shadow-lg p-4 rounded-md">
                        <div class="flex gap-4">
                            <div class="w-60 h-36 aspect-square">
                                @if ($unit->fotos)
                                    @php $photos = json_decode($unit->fotos) @endphp
                                    @if (count($photos) > 0)
                                        <img class="w-full h-full object-cover rounded-md" src="{{ asset('/kendaraan/' . $photos[0]) }}" alt="{{ $unit->nama_kendaraan }}">
                                    @else
                                        <img class="w-full h-full object-cover rounded-md" src="https://via.placeholder.com/150" alt="No Image">
                                    @endif
                                @else
                                    <img class="w-full h-full object-cover rounded-md" src="https://via.placeholder.com/150" alt="No Image">
                                @endif
                            </div>
                            <div class="flex-1">
                                <div class="space-y-2">
                                    <h1 class="font-bold montserrat-font text-xl">{{ $unit->nama_kendaraan }}</h1>
                                    <div class="w-full flex flex-col flex-wrap gap-1">
                                        <div class="text-xs flex gap-2">
                                            <p class="font-medium text-gray-500">Tipe Rental</p>
                                            <p class="font-bold montserrat-font">{{ $tipe_rental === 'tanpa_sopir' ? 'Lepas Kunci' : 'Dengan Sopir' }}</p>
                                        </div>
                                        <div class="text-xs flex gap-2">
                                            <p class="font-medium text-gray-500">Metode Pengantaran</p>
                                            <p class="font-bold montserrat-font">{{ $lokasi_pengambilan instanceof \App\Models\AlamatMitra ? 'Diambil Di Tempat' : 'Diantar' }}</p>
                                        </div>
                                        @if ($tipe_rental === 'dengan_sopir')
                                            <div class="text-xs flex gap-2">
                                                <p class="font-medium text-gray-500">Penggunaan Sopir</p>
                                                <p class="font-bold montserrat-font">Sepanjang Hari</p>
                                            </div>
                                        @endif
                                        <div class="text-xs flex gap-2">
                                            <p class="font-medium text-gray-500">Periode Rental</p>
                                            <p class="font-bold montserrat-font">{{ $startDateTime->format('d M Y H:i') }} - {{ $endDateTime->format('d M Y H:i') }}</p>
                                        </div>
                                        <div class="text-xs flex gap-2">
                                            <p class="font-medium text-gray-500">Lokasi Pengambilan</p>
                                            <p class="font-bold montserrat-font">
                                                @if ($lokasi_pengambilan instanceof \App\Models\AlamatMitra)
                                                    {{ $lokasi_pengambilan->alamat }}
                                                @else
                                                    {{ $lokasi_pengambilan }}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="text-xs flex gap-2">
                                            <p class="font-medium text-gray-500">Lokasi Pengembalian</p>
                                            <p class="font-bold montserrat-font">
                                                @if ($lokasi_pengembalian instanceof \App\Models\AlamatMitra)
                                                    {{ $lokasi_pengembalian->alamat }}
                                                @else
                                                    {{ $lokasi_pengembalian }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 border border-gray-200 p-2 flex justify-between items-center rounded-md mt-4">
                                    <div>
                                        <p class="text-xs text-gray-700 font-medium">Harga Kendaraan</p>
                                        <p class="montserrat-font font-bold">Rp {{ number_format($unitCost, 0, ',', '.') }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-700 font-medium">Biaya Pengantaran</p>
                                        <p class="montserrat-font font-bold">Rp {{ number_format($deliveryFee, 0, ',', '.') }}</p>
                                    </div>
                                    @if ($tipe_rental === 'dengan_sopir')
                                        <div>
                                            <p class="text-xs text-gray-700 font-medium">Biaya Sopir/Hari</p>
                                            <p class="montserrat-font font-bold">Rp {{ number_format($driverFee, 0, ',', '.') }}</p>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="text-xs text-gray-700 font-medium">Total</p>
                                        <p class="montserrat-font font-bold">Rp {{ number_format($total, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Data Pemesanan -->
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                Data Pemesanan
            </h1>
            <div class="p-6 space-y-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="space-y-4">
                    <h1 class="uppercase font-bold text-md plus-jakarta-sans-font">Account Pemesan</h1>
                    <div>
                        <p class="mb-2 text-base font-medium text-gray-500">Nama Entitas</p>
                        <p class="text-md montserrat-font font-medium">{{ $entitasPenyewa->nama_entitas ?? 'Nama Entitas' }}</p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Nomor Telepon</p>
                            <p class="text-md montserrat-font font-medium">+62 {{ $user->no_telepon ?? '0812345678' }}</p>
                        </div>
                        <div class="flex-1">
                            <p class="mb-2 text-base font-medium text-gray-500">Email</p>
                            <p class="text-md montserrat-font font-medium">{{ $user->email ?? 'email@example.com' }}</p>
                        </div>
                    </div>
                </div>
                @if ($entitasPenyewa && $entitasPenyewa->tipe_entitas === 'perusahaan')
                    <div class="w-full h-[1px] bg-gray-200"></div>
                    <div class="space-y-4">
                        <h1 class="uppercase font-bold text-md plus-jakarta-sans-font">Perwakilan Pemesan</h1>
                        <div class="flex flex-col md:flex-row gap-5 w-full">
                            <div class="flex-1">
                                <p class="mb-2 text-base font-medium text-gray-500">Nama Perwakilan</p>
                                <p class="text-md montserrat-font font-medium">{{ $rentalDetails[array_key_first($rentalDetails)]['perwakilan_penyewa'] ?? 'Tidak Ada' }}</p>
                            </div>
                            <div class="flex-1">
                                <p class="mb-2 text-base font-medium text-gray-500">Nomor Telepon Perwakilan</p>
                                <p class="text-md montserrat-font font-medium">+62 {{ $rentalDetails[array_key_first($rentalDetails)]['kontak_perwakilan'] ?? 'Tidak Ada' }}</p>
                            </div>
                        </div>
                    </div>
                @endif
               <!-- Data Pengemudi (Jika Tanpa Sopir) -->
                    @if ($tipe_rental === 'tanpa_sopir')
                    <div class="w-full h-[1px] bg-gray-200"></div>
                    <div class="space-y-4">
                        <h1 class="uppercase font-bold text-md plus-jakarta-sans-font">Data Pengemudi</h1>
                        @foreach ($rentalDetails as $id_unit => $detail)
                            <div class="border-b pb-4 last:border-b-0">
                                <h4 class="font-semibold text-gray-800 mb-2">{{ $detail['unit']->nama_kendaraan }}</h4>
                                <div class="flex flex-col md:flex-row gap-5 w-full">
                                    <div class="flex-1">
                                        <p class="mb-2 text-base font-medium text-gray-500">Nama Pengemudi</p>
                                        <p class="text-md montserrat-font font-medium">{{ $detail['driver_nama'] ?? 'Tidak Ada' }}</p>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-2 text-base font-medium text-gray-500">Nomor Telepon Pengemudi</p>
                                        <p class="text-md montserrat-font font-medium">+62 {{ $detail['driver_telepon'] ?? 'Tidak Ada' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Sisi Kanan (Summary Section) -->
        <div class="order-1 sm:w-[35%] h-fit bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
            </div>

            <div class="rounded-xl p-6 space-y-4 text-gray-800 border border-gray-100 mt-4 hover:shadow-lg transition-all">
                <!-- Informasi Mitra -->
                <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-purple-100 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" class="text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-normal lg:text-xl font-bold text-gray-800">{{ $rentalDetails[array_key_first($rentalDetails)]['unit']->nama_mitra ?? 'Nama Mitra' }}</h3>
                            <p class="text-sm text-gray-500">{{ $rentalDetails[array_key_first($rentalDetails)]['unit']->kota_mitra ?? 'Kota Mitra' }}</p>
                        </div>
                    </div>
                </div>
                <!-- Detail Per Unit -->
                <div class="bg-white plus-jakarta-sans-font p-4 rounded-lg space-y-4 mt-2">
                    @foreach ($rentalDetails as $id_unit => $detail)
                        @php
                            $unit = $detail['unit'];
                            $lokasi_pengambilan = $detail['lokasi_pengambilan'];
                            $lokasi_pengembalian = $detail['lokasi_pengembalian'];
                            $startDateTime = $detail['startDateTime'];
                            $endDateTime = $detail['endDateTime'];
                        @endphp
                        <div class="border-b border-gray-100 pb-4 last:border-b-0">
                            <h4 class="font-semibold text-gray-800 mb-2">{{ $unit->nama_kendaraan }}</h4>
                            <div class="flex items-start gap-3">
                                <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Mulai</h4>
                                    <p class="text-gray-600">{{ $startDateTime->format('D, d M Y') }}</p>
                                    <p class="text-sm text-purple-600 font-medium">{{ $startDateTime->format('H:i') }} WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 mt-2">
                                <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Tanggal dan Waktu Selesai</h4>
                                    <p class="text-gray-600">{{ $endDateTime->format('D, d M Y') }}</p>
                                    <p class="text-sm text-purple-600 font-medium">{{ $endDateTime->format('H:i') }} WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 mt-2">
                                <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Lokasi Jemput</h4>
                                    <p class="text-gray-600">
                                        @if ($lokasi_pengambilan instanceof \App\Models\AlamatMitra)
                                            {{ $lokasi_pengambilan->alamat }}
                                        @else
                                            {{ $lokasi_pengambilan }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 mt-2">
                                <div class="mt-1 bg-purple-100 p-1.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Lokasi Kembali</h4>
                                    <p class="text-gray-600">
                                        @if ($lokasi_pengembalian instanceof \App\Models\AlamatMitra)
                                            {{ $lokasi_pengembalian->alamat }}
                                        @else
                                            {{ $lokasi_pengembalian }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                    Lanjutkan
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Custom Scrollbar CSS -->
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</x-user-layout>