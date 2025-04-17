<x-user-layout title="Detail Pemesanan">
    <div class="w-full lg:max-w-4xl md:max-w-2xl mx-auto mt-8 px-5">
        <!-- Progress Bar -->
        <div class="relative">
            <div class="absolute top-5 w-full h-1.5 bg-white shadow-sm rounded-full"></div>
            <div class="progress-line absolute top-5 h-1.5 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full w-0"></div>
            <div class="flex justify-between relative">
                <div class="step active-step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-purple-600 text-white font-bold shadow-lg border-4 border-white text-sm transition-all duration-300">1</div>
                    <div class="mt-3 text-sm font-semibold text-purple-600">Pesan</div>
                </div>
                <div class="step flex flex-col items-center">
                    <div class="step-icon w-10 h-10 rounded-full flex items-center justify-center bg-gray-100 text-gray-500 font-bold shadow-md border-4 border-white text-sm transition-all duration-300">2</div>
                    <div class="mt-3 text-sm font-medium text-gray-500">Review</div>
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
        <!-- Form Section -->
        <div class="order-1 sm:w-[65%] w-full rounded-md bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <form method="POST" action="{{ route('review') }}">
                @csrf
                <!-- Hidden Fields -->
                <input type="hidden" name="id_kendaraan" value="{{ $vehicle->id_kendaraan }}">
                <input type="hidden" name="tipe_rental" value="{{ $tipe_rental }}">
                <input type="hidden" name="tanggal_mulai" value="{{ $startDateTime->format('Y-m-d H:i:s') }}">
                <input type="hidden" name="tanggal_kembali" value="{{ $endDateTime->format('Y-m-d H:i:s') }}">

                <!-- Lokasi Pengambilan -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    Lokasi Pengambilan
                </h1>
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="flex flex-col gap-4">
                        <label class="flex items-center">
                            <input type="radio" name="lokasi_pengambilan" value="kantor_rental" checked class="mr-2">
                            Kantor Rental: {{ $vehicle->alamat_mitra }}
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="lokasi_pengambilan" value="lokasi_lain" class="mr-2">
                            Lokasi Lain: 
                            <input type="text" name="lokasi_pengambilan_lain" class="ml-2 w-full p-2 border border-gray-200 rounded-lg" placeholder="Masukkan alamat">
                        </label>
                    </div>
                </div>

                <!-- Lokasi Pengembalian -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    Lokasi Pengembalian
                </h1>
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="flex flex-col gap-4">
                        <label class="flex items-center">
                            <input type="radio" name="lokasi_pengembalian" value="kantor_rental" checked class="mr-2">
                            Kantor Rental: {{ $vehicle->alamat_mitra }}
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="lokasi_pengembalian" value="lokasi_lain" class="mr-2">
                            Lokasi Lain: 
                            <input type="text" name="lokasi_pengembalian_lain" class="ml-2 w-full p-2 border border-gray-200 rounded-lg" placeholder="Masukkan alamat">
                        </label>
                    </div>
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
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="mb-5">
                        <label for="nama_lengkap" class="block mb-2 text-base font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <label for="nomor_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                <input type="tel" name="nomor_telepon" id="nomor_telepon" class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="8123456789">
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="email" class="block mb-2 text-base font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan email anda">
                        </div>
                    </div>
                </div>

                <!-- Data Pengemudi (hanya untuk tanpa sopir) -->
                @if($tipe_rental == 'tanpa_sopir')
                <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    Data Pengemudi
                </h1>
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <label for="driver_nama" class="block mb-2 text-base font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="driver_nama" id="driver_nama" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan nama lengkap pengemudi">
                        </div>
                        <div class="flex-1">
                            <label for="driver_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                <input type="tel" name="driver_telepon" id="driver_telepon" class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="8123456789">
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="flex justify-end mt-6">
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                        Lanjutkan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Summary Section -->
        <div class="order-1 sm:w-[35%] bg-white rounded-md shadow-md w-full p-6 md:p-8 rounded-tr-2xl rounded-br-2xl">
      

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Rental</h1>
            </div>

            <!-- Informasi Mitra -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Mitra</h3>
                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                    <div class="bg-purple-100 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">{{ $vehicle->mitra->nama_mitra }}</h4>
                        <p class="text-sm text-gray-600">
                            {{ $vehicle->mitra && $vehicle->mitra->alamatMitra->first() ? $vehicle->mitra->alamatMitra->first()->kota . ', ' . $vehicle->mitra->alamatMitra->first()->provinsi : 'Lokasi Tidak Tersedia' }}
                        </p>                    
                    </div>
                </div>
            </div>

                  <!-- Vehicle Image -->
                  <div class="h-48 bg-gray-200 relative mb-6 rounded-lg overflow-hidden">
                    @if ($vehicle->fotos)
                        @php $photos = json_decode($vehicle->fotos) @endphp
                        @if(count($photos) > 0)
                            <img src="{{ asset('/kendaraan/' . $photos[0]) }}" class="h-full w-full object-cover" alt="{{ $vehicle->nama_kendaraan }}">
                        @else
                            <div class="h-full w-full flex items-center justify-center bg-gray-200 text-gray-500">
                                No Image Available
                            </div>
                        @endif
                    @else
                        <div class="h-full w-full flex items-center justify-center bg-gray-200 text-gray-500">
                            No Image Available
                        </div>
                    @endif
                </div>
            <!-- Detail Kendaraan -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Kendaraan</h3>
                <div class="grid grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Kendaraan</p>
                            <p class="text-sm text-gray-600">{{ $vehicle->nama_kendaraan }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Transmisi</p>
                            <p class="text-sm text-gray-600">{{ ucfirst($vehicle->transmisi) }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Jumlah Kursi</p>
                            <p class="text-sm text-gray-600">{{ $vehicle->jumlah_kursi }} Penumpang</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Tahun Produksi</p>
                            <p class="text-sm text-gray-600">{{ $vehicle->tahun_produksi }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Periode Rental -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Periode Rental</h3>
                <div class="p-4 bg-gray-50 rounded-lg space-y-4">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Tanggal Mulai</p>
                            <p class="text-sm text-gray-600">{{ $startDateTime->format('D, d M Y') }} • {{ $startDateTime->format('H:i') }} WIB</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Tanggal Selesai</p>
                            <p class="text-sm text-gray-600">{{ $endDateTime->format('D, d M Y') }} • {{ $endDateTime->format('H:i') }} WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Harga -->
            @php
                $duration = $startDateTime->diffInDays($endDateTime) + 1;
                $totalCost = $vehicle->harga_sewa_perhari * $duration;
                if ($tipe_rental == 'dengan_sopir') {
                    $driverFee = \Illuminate\Support\Facades\DB::table('fee_setting')
                        ->where('nama_fee', 'biaya_sopir')
                        ->where('is_active', 1)
                        ->value('nilai_fee') ?? 0;
                    $totalCost += $driverFee * $duration;
                }
            @endphp
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Total Harga</h3>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.657 0 3 .895 3 2s-1.343 2-3 2m0 0c-1.657 0-3 .895-3 2s1.343 2 3 2m-6 0V5m12 14v-4" />
                            </svg>
                            <p class="text-lg font-semibold text-gray-800">Rp {{ number_format($totalCost, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    @if($tipe_rental == 'dengan_sopir')
                        <p class="text-sm text-gray-600 mt-2">Termasuk biaya sopir Rp {{ number_format($driverFee, 0, ',', '.') }}/hari</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-user-layout>