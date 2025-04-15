<x-user-layout title="Hasil Pencarian Kendaraan">
    <div class="max-w-[1600px] mx-auto px-4 py-8">
        <!-- Search Summary -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Hasil Pencarian Kendaraan</h1>
            
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
            
            <!-- Modify Search Button -->
            <div class="mt-4 flex justify-end">
                <button onclick="history.back()" class="text-sm text-indigo-600 hover:text-indigo-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Ubah Pencarian
                </button>
            </div>
        </div>
        
        <!-- Filter and Sort Controls -->
        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="mb-3 md:mb-0">
                    <p class="font-medium text-gray-800">{{ count($vehicles) }} kendaraan ditemukan</p>
                </div>
                
                <div class="flex flex-wrap gap-3">
                    <!-- Filter Dropdown -->
                    <div class="relative">
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Filter Jenis</option>
                            <option value="mobil">Mobil</option>
                            <option value="motor">Motor</option>
                        </select>
                    </div>
                    
                    <!-- Sort Dropdown -->
                    <div class="relative">
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Urutkan</option>
                            <option value="price_low_high">Harga: Rendah ke Tinggi</option>
                            <option value="price_high_low">Harga: Tinggi ke Rendah</option>
                            <option value="newest">Terbaru</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Search Results -->
        @if(count($vehicles) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($vehicles as $kendaraan)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                        <!-- Vehicle Image -->
                        <div class="h-48 bg-gray-200 relative">
                            @if ($kendaraan->fotos)
                            @php $photos = json_decode($kendaraan->fotos) @endphp
                            @foreach ($photos as $foto)
                                <img src="{{ asset('/kendaraan/' . $foto) }}" class="h-full w-full object-cover" alt="">
                            @endforeach
                        @endif
    
                            <!-- Vehicle Type Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                  
                                </span>
                            </div>
                        </div>
                        
                        <!-- Vehicle Details -->
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $kendaraan->nama_kendaraan }}</h3>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm text-gray-600 ml-1">{{ $kendaraan->rating ?? '4.5' }}</span>
                                </div>
                            </div>
                            
                            <!-- Location -->
                            <div class="flex items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-600">{{ $kendaraan->kota }}, {{ $kendaraan->kecamatan }} {{ $kendaraan->provinsi }}</span>
                            </div>
                            
                            <!-- Features -->
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    {{ $kendaraan->transmisi ?? 'Manual' }}
                                </span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    {{ $kendaraan->jumlah_kursi ?? '4' }} Penumpang
                                </span>

                            </div>
                            
                            <!-- Price and Book Button -->
                            <div class="flex justify-between items-center mt-4">
                                <div>
                                  <p class="text-xl font-bold text-gray-900">Rp {{ number_format($kendaraan->harga_sewa_perhari, 0, ',', '.') }}</p>
                                    <p class="text-xs text-gray-500">per hari</p>
                                </div>
                                
                                {{-- <a href="{{ route('kendaraan.detail', $kendaraan->id_kendaraan) }}" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition-colors">
                                    Detail
                                </a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <h3 class="text-xl font-medium text-gray-900 mb-2">Tidak ada kendaraan tersedia</h3>
                <p class="text-gray-600 mb-6">Tidak ada kendaraan yang tersedia untuk kriteria pencarian Anda. Silakan coba mengubah tanggal atau lokasi pencarian.</p>
                <button onclick="history.back()" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition-colors">
                    Ubah Pencarian
                </button>
            </div>
        @endif
    </div>
</x-user-layout>