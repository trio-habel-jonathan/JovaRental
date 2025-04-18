<x-user-layout title="Hasil Pencarian">
    <div class="max-w-[1600px] mx-auto p-4 md:p-8 lg:p-12">
        <!-- Search Form Component -->

        <!-- Search Summary -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Hasil Pencarian</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="border-r pr-4">
                    <p class="text-sm text-gray-500">Tipe Rental</p>
                    <p class="font-medium">
                        {{ $searchParams['tipe_rental'] == 'tanpa_sopir' ? 'Tanpa Sopir' : 'Dengan Sopir' }}
                    </p>
                </div>
                <div class="border-r pr-4">
                    <p class="text-sm text-gray-500">Lokasi</p>
                    <p class="font-medium">{{ $searchParams['lokasi'] }}</p>
                </div>
                <div class="border-r pr-4">
                    <p class="text-sm text-gray-500">Mulai</p>
                    <p class="font-medium">{{ $searchParams['start_date_formatted'] }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Selesai</p>
                    <p class="font-medium">{{ $searchParams['end_date_formatted'] }}</p>
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button onclick="history.back()"
                    class="text-sm text-indigo-600 hover:text-indigo-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Ubah Pencarian
                </button>
            </div>
        </div>

        <section id="search" class="w-full flex items-center justify-center my-6">
            <x-search-form action="{{ route('search') }}" :searchParams="$searchParams" />
        </section>

        <!-- Filter and Sort Controls -->
        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="mb-3 md:mb-0">
                    <p class="font-medium text-gray-800">{{ count($groupedVehicles) }} jenis kendaraan ditemukan</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <div class="relative">
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Filter Jenis</option>
                            <option value="mobil">Mobil</option>
                            <option value="motor">Motor</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Urutkan</option>
                            <option value="price_low_high">Harga: Rendah ke Tinggi</option>
                            <option value="price_high_low">Harga: Tinggi ke Rendah</option>
                            <option value="newest">Terbaru</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vehicle Slider (only shown when a vehicle is selected) -->
        <!-- Vehicle Slider (only shown when a vehicle is selected) -->
        @if (isset($selectedVehicle) && count($relatedVehicles) > 0)
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Pilih Penyedia Rental Untuk: {{ $selectedVehicle }}
                </h3>
                <div class="relative">
                    <button id="slider-left"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white rounded-full p-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="vehicle-slider" class="flex overflow-x-auto gap-4 py-2 px-8 hide-scrollbar">
                        @foreach ($relatedVehicles as $vehicle)
                            @php
                                if ($searchParams['tipe_rental'] === 'tanpa_sopir') {
                                    $start = \Carbon\Carbon::createFromFormat(
                                        'd M Y, H:i',
                                        $searchParams['start_date_formatted'],
                                    );
                                    $end = \Carbon\Carbon::createFromFormat(
                                        'd M Y, H:i',
                                        $searchParams['end_date_formatted'],
                                    );
                                    $duration = $start->diffInDays($end) + 1;
                                    $totalCost = $vehicle->harga_sewa_perhari * $duration;
                                } else {
                                    $duration = $searchParams['durasi'];
                                    $totalCost = ($vehicle->harga_sewa_perhari + $driver_fee) * $duration;
                                }
                            @endphp
                            <div
                                class="flex-shrink-0 w-64 bg-white rounded-lg shadow-md overflow-hidden relative cursor-pointer
                        {{ request()->input('vendor') == $vehicle->id_kendaraan ? 'ring-2 ring-indigo-600' : '' }}">
                                <a href="{{ request()->fullUrlWithQuery(['selected_vehicle' => $selectedVehicle, 'vendor' => $vehicle->id_kendaraan]) }}"
                                    class="block">
                                    <div class="h-32 bg-gray-200">
                                        @if ($vehicle->fotos)
                                            @php $photos = json_decode($vehicle->fotos) @endphp
                                            @if (count($photos) > 0)
                                                <img src="{{ asset('/kendaraan/' . $photos[0]) }}"
                                                    class="h-full w-full object-cover"
                                                    alt="{{ $vehicle->nama_kendaraan }}">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="p-3">
                                        <p class="font-medium">{{ $vehicle->nama_mitra }}</p>
                                        <p class="text-lg font-bold text-gray-900">Rp
                                            {{ number_format($totalCost, 0, ',', '.') }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <button id="slider-right"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white rounded-full p-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Selected Vehicle Detail -->
            @if (request()->has('vendor'))
                @php
                    $selectedVendorVehicle = null;
                    foreach ($relatedVehicles as $vehicle) {
                        if ($vehicle->id_kendaraan == request()->input('vendor')) {
                            $selectedVendorVehicle = $vehicle;
                            break;
                        }
                    }
                    if ($searchParams['tipe_rental'] === 'tanpa_sopir') {
                        $start = \Carbon\Carbon::createFromFormat('d M Y, H:i', $searchParams['start_date_formatted']);
                        $end = \Carbon\Carbon::createFromFormat('d M Y, H:i', $searchParams['end_date_formatted']);
                        $duration = $start->diffInDays($end) + 1;
                        $totalCost = $selectedVendorVehicle->harga_sewa_perhari * $duration;
                    } else {
                        $duration = $searchParams['durasi'];
                        $totalCost = ($selectedVendorVehicle->harga_sewa_perhari + $driver_fee) * $duration;
                    }
                @endphp

                @if ($selectedVendorVehicle)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="flex flex-col md:flex-row">
                            <!-- Vehicle Images -->
                            <div class="md:w-1/3 h-64 md:h-auto bg-gray-200 relative">
                                @if ($selectedVendorVehicle->fotos)
                                    @php $photos = json_decode($selectedVendorVehicle->fotos) @endphp
                                    <div class="swiper-container h-full">
                                        <div class="swiper-wrapper">
                                            @foreach ($photos as $foto)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('/kendaraan/' . $foto) }}"
                                                        class="h-full w-full object-cover"
                                                        alt="{{ $selectedVendorVehicle->nama_kendaraan }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                @endif
                            </div>

                            <!-- Vehicle Details -->
                            <div class="md:w-2/3 p-6">
                                <div class="flex items-center mb-2">
                                    @if ($selectedVendorVehicle->foto_mitra)
                                        <img src="{{ asset('/mitra/' . $selectedVendorVehicle->foto_mitra) }}"
                                            class="h-10 w-10 rounded-full object-cover mr-3"
                                            alt="{{ $selectedVendorVehicle->nama_mitra }}">
                                    @else
                                        <div
                                            class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                                            <span
                                                class="text-indigo-800 font-medium">{{ substr($selectedVendorVehicle->nama_mitra, 0, 1) }}</span>
                                        </div>
                                    @endif
                                    <h3 class="text-lg font-semibold">{{ $selectedVendorVehicle->nama_mitra }}</h3>
                                </div>

                                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                    {{ $selectedVendorVehicle->nama_kendaraan }}</h2>

                                <div class="flex flex-wrap gap-4 mb-4">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-gray-700">{{ $selectedVendorVehicle->kota }},
                                            {{ $selectedVendorVehicle->provinsi }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span class="text-gray-700">{{ $selectedVendorVehicle->jumlah_kursi }}
                                            Penumpang</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                        </svg>
                                        <span
                                            class="text-gray-700">{{ ucfirst($selectedVendorVehicle->transmisi) }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span
                                            class="text-gray-700">{{ $selectedVendorVehicle->tahun_produksi }}</span>
                                    </div>
                                </div>

                                @if ($selectedVendorVehicle->deskripsi)
                                    <p class="text-gray-700 mb-6">{{ $selectedVendorVehicle->deskripsi }}</p>
                                @endif

                                <div class="flex justify-between items-center mt-6">
                                    <div>
                                        <p class="text-2xl font-bold text-gray-900">Rp
                                            {{ number_format($totalCost, 0, ',', '.') }}</p>
                                        @if ($searchParams['tipe_rental'] === 'dengan_sopir')
                                            <p class="text-xs text-gray-500">Termasuk biaya sopir Rp
                                                {{ number_format($driver_fee, 0, ',', '.') }}/hari</p>
                                        @endif
                                    </div>
                                    <a href="{{ route('detail', [
                                        'id_unit' => $selectedVendorVehicle->id_unit, // Changed from $vehicle->id_unit
                                        'tipe_rental' => $searchParams['tipe_rental'],
                                        'start_date' => $searchParams['start_date_formatted'],
                                        'end_date' => $searchParams['end_date_formatted'],
                                        'lokasi' => $searchParams['lokasi'],
                                    ]) }}"
                                        class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endif

        <!-- Vehicle Cards -->
        @if (!isset($selectedVehicle) && count($groupedVehicles) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($groupedVehicles as $kendaraan)
                    @php
                        $totalCost =
                            $searchParams['tipe_rental'] === 'tanpa_sopir'
                                ? $kendaraan->harga_sewa_perhari *
                                    (\Carbon\Carbon::createFromFormat(
                                        'd M Y, H:i',
                                        $searchParams['start_date_formatted'],
                                    )->diffInDays(
                                        \Carbon\Carbon::createFromFormat(
                                            'd M Y, H:i',
                                            $searchParams['end_date_formatted'],
                                        ),
                                    ) +
                                        1)
                                : ($kendaraan->harga_sewa_perhari + $driver_fee) * $searchParams['durasi'];
                    @endphp
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="h-48 bg-gray-200 relative">
                            @if ($kendaraan->fotos)
                                @php $photos = json_decode($kendaraan->fotos) @endphp
                                @if (count($photos) > 0)
                                    <img src="{{ asset('/kendaraan/' . $photos[0]) }}"
                                        class="h-full w-full object-cover" alt="{{ $kendaraan->nama_kendaraan }}">
                                @endif
                            @endif
                            <div class="absolute top-3 left-3">
                                <span
                                    class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    {{ $kendaraan->total_options }} penyedia tersedia
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $kendaraan->nama_kendaraan }}</h3>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm text-gray-600 ml-1">{{ $kendaraan->rating ?? '4.5' }}</span>
                                </div>
                            </div>
                            <div class="flex items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-500 mr-1 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-600">{{ $kendaraan->kota }},
                                    {{ $kendaraan->kecamatan }} {{ $kendaraan->provinsi }}</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    {{ $kendaraan->transmisi ?? 'Manual' }}
                                </span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    {{ $kendaraan->jumlah_kursi ?? '4' }} Penumpang
                                </span>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                <div>
                                    <p class="text-xl font-bold text-gray-900">Rp
                                        {{ number_format($totalCost, 0, ',', '.') }}</p>
                                    @if ($searchParams['tipe_rental'] === 'dengan_sopir')
                                        <p class="text-xs text-gray-500">Termasuk biaya sopir Rp
                                            {{ number_format($driver_fee, 0, ',', '.') }}/hari</p>
                                    @endif
                                </div>
                                <a href="{{ request()->fullUrlWithQuery(['selected_vehicle' => $kendaraan->nama_kendaraan]) }}"
                                    class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors">
                                    Lanjutkan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif(count($groupedVehicles) == 0)
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <h3 class="text-xl font-medium text-gray-900 mb-2">Tidak ada kendaraan tersedia</h3>
                <p class="text-gray-600 mb-6">Tidak ada kendaraan yang tersedia untuk kriteria pencarian Anda. Silakan
                    coba mengubah tanggal atau lokasi pencarian.</p>
                <button onclick="history.back()"
                    class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition-colors">
                    Ubah Pencarian
                </button>
            </div>
        @endif
    </div>

    <!-- JavaScript for slider functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('vehicle-slider');
            const leftBtn = document.getElementById('slider-left');
            const rightBtn = document.getElementById('slider-right');

            if (slider && leftBtn && rightBtn) {
                leftBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: -300,
                        behavior: 'smooth'
                    });
                });

                rightBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: 300,
                        behavior: 'smooth'
                    });
                });
            }

            if (typeof Swiper !== 'undefined' && document.querySelector('.swiper-container')) {
                new Swiper('.swiper-container', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    loop: true,
                });
            }
        });
    </script>

    <style>
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</x-user-layout>
