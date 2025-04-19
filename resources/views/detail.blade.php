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
            <form id="rentalForm" action="{{ route('process.detail') }}" method="POST">
                @csrf
                <!-- Hidden Fields -->
                @foreach ($units as $unit)
                    <!-- Debug jumlah kendaraan -->
                    <div class="mb-4 text-gray-600">
                        Jumlah kendaraan yang dipilih: {{ count($units) }}
                    </div>
                    <input type="hidden" name="id_units[]" value="{{ $unit->id_unit }}">
                    <input type="hidden" name="tanggal_mulai[{{ $unit->id_unit }}]" value="{{ isset($unit->startDateTime) ? $unit->startDateTime->format('Y-m-d H:i:s') : now()->format('Y-m-d H:i:s') }}">
                    <input type="hidden" name="tanggal_kembali[{{ $unit->id_unit }}]" value="{{ isset($unit->endDateTime) ? $unit->endDateTime->format('Y-m-d H:i:s') : now()->addDay()->format('Y-m-d H:i:s') }}">
                    <input type="hidden" name="tipe_rental[{{ $unit->id_unit }}]" value="{{ $unit->tipe_rental }}">
                @endforeach

                <!-- Data Pemesan -->
                <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    Data Pemesan
                </h3>
                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <div class="flex-1">
                            <label for="nama_entitas" class="block mb-2 text-base font-medium text-gray-700">Nama Entitas</label>
                            <input type="text" id="nama_entitas" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100" value="{{ $entitasPenyewa->nama_entitas ?? 'Nama Entitas' }}" readonly>
                        </div>
                        <div class="flex-1">
                            <label for="no_telepon" class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                <input type="tel" id="no_telepon" class="w-full p-3 pl-12 border border-gray-200 rounded-lg bg-gray-100" value="{{ $user->no_telepon ?? '0812345678' }}" readonly>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="email_entitas" class="block mb-2 text-base font-medium text-gray-700">Email Entitas</label>
                            <input type="text" id="email_entitas" class="w-full p-3 border border-gray-200 rounded-lg bg-gray-100" value="{{ $user->email ?? 'email@entitas.com' }}" readonly>
                        </div>
                    </div>
                    <!-- Kontak Perwakilan (Hanya untuk Perusahaan) -->
                    @if ($entitasPenyewa && $entitasPenyewa->tipe_entitas === 'perusahaan')
                        <div class="flex flex-col md:flex-row gap-5 w-full mt-6">
                            <div class="flex-1">
                                <label for="perwakilan_penyewa" class="block mb-2 text-base font-medium text-gray-700">Nama Perwakilan</label>
                                <input type="text" name="perwakilan_penyewa" id="perwakilan_penyewa" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan nama perwakilan" required>
                            </div>
                            <div class="flex-1">
                                <label for="kontak_perwakilan" class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon Perwakilan</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                    <input type="tel" name="kontak_perwakilan" id="kontak_perwakilan" class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="8123456789" required pattern="[0-9]{9,12}">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Per Kendaraan -->
                @foreach ($units as $unit)
                    <div class="mb-8 border-b pb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">{{ $unit->nama_kendaraan }} ({{ $unit->tipe_rental === 'dengan_sopir' ? 'Dengan Sopir' : 'Tanpa Sopir' }})</h2>

                        <!-- Lokasi Pengambilan -->
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            Lokasi Pengambilan
                        </h3>
                        <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                            <div class="flex flex-col gap-4">
                                @if ($alamatMitra->isEmpty())
                                    <p class="text-red-500 text-sm">Tidak ada kantor rental di kota ini.</p>
                                    <label class="flex items-center opacity-50">
                                        <input type="radio" name="lokasi_pengambilan[{{ $unit->id_unit }}]" value="kantor_rental" disabled class="mr-2">
                                        Kantor Rental: Tidak Tersedia
                                    </label>
                                @else
                                    <label class="flex items-center">
                                        <input type="radio" name="lokasi_pengambilan[{{ $unit->id_unit }}]" value="kantor_rental" checked class="mr-2" onclick="toggleDropdown('pengambilan', '{{ $unit->id_unit }}')">
                                        Kantor Rental:
                                        <select name="alamat_kantor_pengambilan[{{ $unit->id_unit }}]" id="alamat_kantor_pengambilan_{{ $unit->id_unit }}" class="ml-2 w-full p-2 border border-gray-200 rounded-lg" required>
                                            <option value="">Pilih Alamat Kantor Rental</option>
                                            @foreach ($alamatMitra as $alamat)
                                                <option value="{{ $alamat->id_alamat }}">{{ $alamat->alamat }}, {{ $alamat->kota }}, {{ $alamat->kecamatan }}, {{ $alamat->provinsi }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                @endif
                                <label class="flex items-center">
                                    <input type="radio" name="lokasi_pengambilan[{{ $unit->id_unit }}]" value="lokasi_lain" class="mr-2" onclick="toggleDropdown('pengambilan', '{{ $unit->id_unit }}')">
                                    Lokasi Lain:
                                    <div class="relative w-full ml-2">
                                        <input type="text" name="lokasi_pengambilan_lain[{{ $unit->id_unit }}]" id="lokasi_pengambilan_lain_{{ $unit->id_unit }}" class="w-full p-2 border border-gray-200 rounded-lg" placeholder="Cari lokasi" disabled>
                                        <input type="hidden" name="lat_pengambilan[{{ $unit->id_unit }}]" id="lat_pengambilan_{{ $unit->id_unit }}">
                                        <input type="hidden" name="long_pengambilan[{{ $unit->id_unit }}]" id="long_pengambilan_{{ $unit->id_unit }}">
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Lokasi Pengembalian -->
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            Lokasi Pengembalian
                        </h3>
                        <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                            <div class="flex flex-col gap-4">
                                @if ($alamatMitra->isEmpty())
                                    <p class="text-red-500 text-sm">Tidak ada kantor rental di kota ini.</p>
                                    <label class="flex items-center opacity-50">
                                        <input type="radio" name="lokasi_pengembalian[{{ $unit->id_unit }}]" value="kantor_rental" disabled class="mr-2">
                                        Kantor Rental: Tidak Tersedia
                                    </label>
                                @else
                                    <label class="flex items-center">
                                        <input type="radio" name="lokasi_pengembalian[{{ $unit->id_unit }}]" value="kantor_rental" checked class="mr-2" onclick="toggleDropdown('pengembalian', '{{ $unit->id_unit }}')">
                                        Kantor Rental:
                                        <select name="alamat_kantor_pengembalian[{{ $unit->id_unit }}]" id="alamat_kantor_pengembalian_{{ $unit->id_unit }}" class="ml-2 w-full p-2 border border-gray-200 rounded-lg" required>
                                            <option value="">Pilih Alamat Kantor Rental</option>
                                            @foreach ($alamatMitra as $alamat)
                                                <option value="{{ $alamat->id_alamat }}">{{ $alamat->alamat }}, {{ $alamat->kota }}, {{ $alamat->kecamatan }}, {{ $alamat->provinsi }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                @endif
                                <label class="flex items-center">
                                    <input type="radio" name="lokasi_pengembalian[{{ $unit->id_unit }}]" value="lokasi_lain" class="mr-2" onclick="toggleDropdown('pengembalian', '{{ $unit->id_unit }}')">
                                    Lokasi Lain:
                                    <input type="text" name="lokasi_pengembalian_lain[{{ $unit->id_unit }}]" id="lokasi_pengembalian_lain_{{ $unit->id_unit }}" class="ml-2 w-full p-2 border border-gray-200 rounded-lg" placeholder="Masukkan alamat" disabled>
                                </label>
                            </div>
                        </div>

                        <!-- Data Pengemudi (hanya untuk tanpa sopir) -->
                        @if ($unit->tipe_rental == 'tanpa_sopir')
                            <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                Data Pengemudi
                            </h3>
                            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                                <div class="flex flex-col md:flex-row gap-5 w-full">
                                    <div class="flex-1">
                                        <label for="driver_nama_{{ $unit->id_unit }}" class="block mb-2 text-base font-medium text-gray-700">Nama Lengkap</label>
                                        <input type="text" name="driver_nama[{{ $unit->id_unit }}]" id="driver_nama_{{ $unit->id_unit }}" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan nama lengkap pengemudi" required>
                                    </div>
                                    <div class="flex-1">
                                        <label for="driver_telepon_{{ $unit->id_unit }}" class="block mb-2 text-base font-medium text-gray-700">Nomor Telepon</label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">+62</span>
                                            <input type="tel" name="driver_telepon[{{ $unit->id_unit }}]" id="driver_telepon_{{ $unit->id_unit }}" class="w-full p-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="8123456789" required pattern="[0-9]{9,12}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach

                <!-- Buttons -->
                <div class="flex justify-between mt-6">
                  <a href="{{ route('search', [
    'from_detail' => 1,
    'lokasi_sopir' => $lokasi,
    'lokasi' => $lokasi,
    'tanggal_mulai_sopir' => isset($units->first()->startDateTime) ? $units->first()->startDateTime->format('Y-m-d') : null,
    'waktu_mulai_sopir' => isset($units->first()->startDateTime) ? $units->first()->startDateTime->format('H:i') : null,
    'durasi' => isset($units->first()->startDateTime, $units->first()->endDateTime) 
        ? max(1, ceil($units->first()->startDateTime->diffInDays($units->first()->endDateTime) + 1)) 
        : null,
    'tanggal_mulai' => isset($units->first()->startDateTime) ? $units->first()->startDateTime->format('Y-m-d') : null,
    'waktu_mulai' => isset($units->first()->startDateTime) ? $units->first()->startDateTime->format('H:i') : null,
    'tanggal_selesai' => isset($units->first()->endDateTime) ? $units->first()->endDateTime->format('Y-m-d') : null,
    'waktu_selesai' => isset($units->first()->endDateTime) ? $units->first()->endDateTime->format('H:i') : null,
    'tipe_rental' => $units->first()->tipe_rental, // Gunakan tipe_rental dari unit pertama
]) }}"
    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-2">
    Tambah Kendaraan
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
    </svg>
</a>
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

            <!-- Kelompokkan kendaraan berdasarkan periode -->
            @php
                $groupedUnits = $units->groupBy(function ($unit) {
                    return (isset($unit->startDateTime) ? $unit->startDateTime->format('Y-m-d H:i') : now()->format('Y-m-d H:i')) . '|' .
                           (isset($unit->endDateTime) ? $unit->endDateTime->format('Y-m-d H:i') : now()->addDay()->format('Y-m-d H:i'));
                });
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
                    <!-- Periode Rental -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Periode Rental</h3>
                        <div class="p-4 bg-gray-50 rounded-lg shadow-sm space-y-4">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Tanggal Mulai</p>
                                    <p class="text-sm text-gray-600">{{ $startDateTime->format('D, d M Y') }} • {{ $startDateTime->format('H:i') }} WIB</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
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

                    <!-- Vehicle List -->
                    @foreach ($unitGroup as $unit)
                        @php
                            $driverFee = $unit->tipe_rental === 'dengan_sopir'
                                ? (\Illuminate\Support\Facades\DB::table('fee_setting')
                                    ->where('nama_fee', 'biaya_sopir')
                                    ->where('is_active', 1)
                                    ->value('nilai_fee') ?? 0)
                                : 0;
                        @endphp
                        <div class="mb-6">
                            <!-- Vehicle Image -->
                            <div class="h-48 bg-gray-200 relative mb-6 rounded-lg overflow-hidden shadow-md">
                                @if ($unit->fotos)
                                    @php $photos = json_decode($unit->fotos) @endphp
                                    @if (count($photos) > 0)
                                        <img src="{{ asset('/kendaraan/' . $photos[0]) }}" class="h-full w-full object-cover" alt="{{ $unit->nama_kendaraan }}">
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

                            <!-- Informasi Mitra -->
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Mitra</h3>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg shadow-sm">
                                    <div class="bg-purple-100 p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">{{ $unit->nama_mitra }}</h4>
                                        <p class="text-sm text-gray-600" id="selected-mitra-address-{{ $unit->id_unit }}">
                                            @if ($alamatMitra->isNotEmpty())
                                                {{ $alamatMitra->first()->alamat }}, {{ $alamatMitra->first()->kota }}, {{ $alamatMitra->first()->kecamatan }}, {{ $alamatMitra->first()->provinsi }}
                                            @else
                                                Lokasi Tidak Tersedia
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Kendaraan -->
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Kendaraan</h3>
                                <div class="grid grid-cols-1 gap-4 p-4 bg-gray-50 rounded-lg shadow-sm">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">Kendaraan</p>
                                            <p class="text-sm text-gray-600 font-semibold">{{ $unit->nama_kendaraan }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">Transmisi</p>
                                            <p class="text-sm text-gray-600">{{ ucfirst($unit->transmisi) }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">Jumlah Kursi</p>
                                            <p class="text-sm text-gray-600">{{ $unit->jumlah_kursi }} Penumpang</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">Tahun Produksi</p>
                                            <p class="text-sm text-gray-600">{{ $unit->tahun_produksi }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Hapus -->
                            <div class="flex justify-end mt-4">
                                <a href="{{ route('remove-unit', ['id_unit' => $unit->id_unit]) }}" class="text-red-600 hover:text-red-800 font-medium">Hapus</a>
                            </div>

                            <!-- Hitung biaya per kendaraan -->
                            @php
                                $unitCost = $unit->tipe_rental === 'tanpa_sopir'
                                    ? $unit->harga_sewa_perhari * $duration
                                    : ($unit->harga_sewa_perhari + $driverFee) * $duration;
                                $totalCost += $unitCost;
                            @endphp
                        </div>
                    @endforeach

                    <!-- Total Harga untuk Periode Ini -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Total Harga</h3>
                        <div class="p-4 bg-purple-50 rounded-lg shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="                            flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Subtotal Kendaraan ({{ count($unitGroup) }} Kendaraan)</p>
                                        <p class="text-sm text-gray-600">Rp {{ number_format($totalCost, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                            @if ($unit->tipe_rental === 'dengan_sopir')
                                <div class="flex items-center justify-between mt-3">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700">Biaya Sopir</p>
                                            <p class="text-sm text-gray-600">Rp {{ number_format($driverFee * $duration, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Biaya Pengantaran</p>
                                        <p class="text-sm text-gray-600">Rp 15,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScript untuk toggle dropdown -->
    <script>
        function toggleDropdown(type, unitId) {
            const kantorPengambilan = document.getElementById(`alamat_kantor_pengambilan_${unitId}`);
            const lokasiPengambilanLain = document.getElementById(`lokasi_pengambilan_lain_${unitId}`);
            const kantorPengembalian = document.getElementById(`alamat_kantor_pengembalian_${unitId}`);
            const lokasiPengembalianLain = document.getElementById(`lokasi_pengembalian_lain_${unitId}`);

            if (type === 'pengambilan') {
                const pengambilanKantor = document.querySelector(`input[name="lokasi_pengambilan[${unitId}]"][value="kantor_rental"]`);
                if (pengambilanKantor.checked) {
                    kantorPengambilan.disabled = false;
                    kantorPengambilan.required = true;
                    lokasiPengambilanLain.disabled = true;
                    lokasiPengambilanLain.required = false;
                    lokasiPengambilanLain.value = '';
                } else {
                    kantorPengambilan.disabled = true;
                    kantorPengambilan.required = false;
                    kantorPengambilan.value = '';
                    lokasiPengambilanLain.disabled = false;
                    lokasiPengambilanLain.required = true;
                }
            } else if (type === 'pengembalian') {
                const pengembalianKantor = document.querySelector(`input[name="lokasi_pengembalian[${unitId}]"][value="kantor_rental"]`);
                if (pengembalianKantor.checked) {
                    kantorPengembalian.disabled = false;
                    kantorPengembalian.required = true;
                    lokasiPengembalianLain.disabled = true;
                    lokasiPengembalianLain.required = false;
                    lokasiPengembalianLain.value = '';
                } else {
                    kantorPengembalian.disabled = true;
                    kantorPengembalian.required = false;
                    kantorPengembalian.value = '';
                    lokasiPengembalianLain.disabled = false;
                    lokasiPengembalianLain.required = true;
                }
            }
        }

        // Panggil fungsi toggleDropdown saat halaman dimuat untuk mengatur status awal
        document.addEventListener('DOMContentLoaded', function () {
            @foreach ($units as $unit)
                toggleDropdown('pengambilan', '{{ $unit->id_unit }}');
                toggleDropdown('pengembalian', '{{ $unit->id_unit }}');
            @endforeach
        });
    </script>
    <script>
        // Your Geoapify API Key
        const geoapifyApiKey = '2640ad08a11e4cbea8864b3a77d14206';
        
        // Function to initialize autocomplete for an input field
        function initializeAutocomplete(inputId, latFieldId, lngFieldId) {
            const input = document.getElementById(inputId);
            if (!input) return;
            
            let timeout = null;
            let currentSuggestions = [];
            
            // Create container for suggestions
            const suggestionsContainer = document.createElement('div');
            suggestionsContainer.className = 'absolute z-50 w-full bg-white border border-gray-300 rounded-lg shadow-lg mt-1 max-h-60 overflow-y-auto hidden';
            input.parentNode.style.position = 'relative';
            input.parentNode.appendChild(suggestionsContainer);
            
            // Create hidden fields for latitude and longitude if they don't exist
            if (!document.getElementById(latFieldId)) {
                const latField = document.createElement('input');
                latField.type = 'hidden';
                latField.id = latFieldId;
                latField.name = latFieldId;
                input.parentNode.appendChild(latField);
            }
            
            if (!document.getElementById(lngFieldId)) {
                const lngField = document.createElement('input');
                lngField.type = 'hidden';
                lngField.id = lngFieldId;
                lngField.name = lngFieldId;
                input.parentNode.appendChild(lngField);
            }
            
            // Add event listener for input changes
            input.addEventListener('input', function() {
                const query = this.value.trim();
                
                // Clear previous timeout
                if (timeout) {
                    clearTimeout(timeout);
                }
                
                // Clear suggestions if query is empty
                if (query.length < 3) {
                    suggestionsContainer.innerHTML = '';
                    suggestionsContainer.classList.add('hidden');
                    return;
                }
                
                // Set timeout to avoid making too many requests while typing
                timeout = setTimeout(() => {
                    fetchSuggestions(query);
                }, 300);
            });
            
            // Function to fetch suggestions from Geoapify API
            async function fetchSuggestions(query) {
                try {
                    const response = await fetch(`https://api.geoapify.com/v1/geocode/autocomplete?text=${encodeURIComponent(query)}&limit=5&format=json&apiKey=${geoapifyApiKey}`);
                    const data = await response.json();
                    
                    if (data.results && data.results.length > 0) {
                        currentSuggestions = data.results;
                        renderSuggestions(data.results);
                    } else {
                        suggestionsContainer.innerHTML = '<div class="p-2 text-gray-500">No results found</div>';
                        suggestionsContainer.classList.remove('hidden');
                    }
                } catch (error) {
                    console.error("Error fetching address suggestions:", error);
                }
            }
            
            // Function to render suggestion list
            function renderSuggestions(suggestions) {
                suggestionsContainer.innerHTML = '';
                
                suggestions.forEach((suggestion, index) => {
                    const suggestionItem = document.createElement('div');
                    suggestionItem.className = 'p-2 hover:bg-gray-100 cursor-pointer';
                    suggestionItem.innerHTML = formatAddress(suggestion);
                    
                    suggestionItem.addEventListener('click', () => {
                        selectSuggestion(suggestion);
                    });
                    
                    suggestionsContainer.appendChild(suggestionItem);
                });
                
                suggestionsContainer.classList.remove('hidden');
            }
            
            // Format address for display
            function formatAddress(result) {
                const parts = [];
                
                if (result.address_line1) parts.push(result.address_line1);
                if (result.address_line2) parts.push(result.address_line2);
                
                return parts.join(', ');
            }
            
            // Handle suggestion selection
            function selectSuggestion(suggestion) {
                input.value = [suggestion.address_line1, suggestion.address_line2].filter(Boolean).join(', ');
                
                // Store latitude and longitude
                document.getElementById(latFieldId).value = suggestion.lat || 0;
                document.getElementById(lngFieldId).value = suggestion.lon || 0;
                
                // Hide suggestions
                suggestionsContainer.innerHTML = '';
                suggestionsContainer.classList.add('hidden');
            }
            
            // Close suggestions when clicking outside
            document.addEventListener('click', function(e) {
                if (e.target !== input && e.target !== suggestionsContainer) {
                    suggestionsContainer.classList.add('hidden');
                }
            });
        }
        
        // Initialize autocomplete for all "Lokasi Lain" fields when document is loaded
        document.addEventListener('DOMContentLoaded', function () {
            @foreach ($units as $unit)
                // Create event listeners for radio buttons
                const pengambilanRadios = document.querySelectorAll(`input[name="lokasi_pengambilan[{{ $unit->id_unit }}]"]`);
                pengambilanRadios.forEach(radio => {
                    radio.addEventListener('change', function() {
                        if (this.value === 'lokasi_lain') {
                            const inputId = `lokasi_pengambilan_lain_{{ $unit->id_unit }}`;
                            const latFieldId = `lat_pengambilan_{{ $unit->id_unit }}`;
                            const lngFieldId = `long_pengambilan_{{ $unit->id_unit }}`;
                            
                            initializeAutocomplete(inputId, latFieldId, lngFieldId);
                        }
                    });
                    
                    // Initialize for already selected "lokasi_lain" option
                    if (radio.value === 'lokasi_lain' && radio.checked) {
                        const inputId = `lokasi_pengambilan_lain_{{ $unit->id_unit }}`;
                        const latFieldId = `lat_pengambilan_{{ $unit->id_unit }}`;
                        const lngFieldId = `long_pengambilan_{{ $unit->id_unit }}`;
                        
                        initializeAutocomplete(inputId, latFieldId, lngFieldId);
                    }
                });
                
                const pengembalianRadios = document.querySelectorAll(`input[name="lokasi_pengembalian[{{ $unit->id_unit }}]"]`);
                pengembalianRadios.forEach(radio => {
                    radio.addEventListener('change', function() {
                        if (this.value === 'lokasi_lain') {
                            const inputId = `lokasi_pengembalian_lain_{{ $unit->id_unit }}`;
                            const latFieldId = `lat_pengembalian_{{ $unit->id_unit }}`;
                            const lngFieldId = `long_pengembalian_{{ $unit->id_unit }}`;
                            
                            initializeAutocomplete(inputId, latFieldId, lngFieldId);
                        }
                    });
                    
                    // Initialize for already selected "lokasi_lain" option
                    if (radio.value === 'lokasi_lain' && radio.checked) {
                        const inputId = `lokasi_pengembalian_lain_{{ $unit->id_unit }}`;
                        const latFieldId = `lat_pengembalian_{{ $unit->id_unit }}`;
                        const lngFieldId = `long_pengembalian_{{ $unit->id_unit }}`;
                        
                        initializeAutocomplete(inputId, latFieldId, lngFieldId);
                    }
                });
            @endforeach
        });
    </script>
</x-user-layout>