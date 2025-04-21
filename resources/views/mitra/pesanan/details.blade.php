<x-mitra-layout title="Detail Pesanan">
    <div class="p-4">
        <div class="flex mb-4 gap-4">
            <div class="bg-white shadow-lg rounded-lg flex flex-col justify-between p-4 w-[42rem]">
                <div class="flex gap-3 items-start">
                    <!-- Bagian Kiri: Ikon dan Biaya -->
                    <div class="flex flex-col items-start">
                        <!-- Ikon SVG -->
                        <div class="w-12 h-12 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <!-- Biaya Layanan dan Pajak -->
                        <div class="mt-2 space-y-1 montserrat-font text-sm">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Total Biaya Kendaraan:</span>
                                <span class="font-semibold">Rp
                                    {{ number_format($totalHargaKendaraan, 2, ',', '.') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Biaya Layanan:</span>
                                <span class="font-semibold">Rp {{ number_format($biayaLayanan, 2, ',', '.') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Pajak:</span>
                                <span class="font-semibold">Rp {{ number_format($pajak, 2, ',', '.') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Biaya Sopir:</span>
                                <span class="font-semibold">Rp {{ number_format($biayaSopir, 2, ',', '.') }}</span>
                            </div>
                            <hr>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Total Pembayaran:</span>
                                <span class="font-semibold text-lg">Rp
                                    {{ number_format($totalBayar, 2, ',', '.') }}</span>
                            </div>
                        </div>
                        <div class="mt-2 space-y-1 montserrat-font text-sm"></div>
                    </div>

                    <!-- Bagian Kanan: Total Pembayaran -->
                    <div class="montserrat-font">
                        {{-- <p class="text-xs text-gray-600">Total Pembayaran</p> 
                        <p class="text-lg font-semibold">Rp {{ number_format($totalBayar, 2, ',', '.') }}</p> --}}
                    </div>
                </div>

                <!-- Bagian Bawah -->
                <div class="flex justify-between mt-4">
                    <div class="flex items-center text-sm w-fit gap-2 font-semibold rounded-md">
                        <p>{{ $pembayaran->metodePembayaranPlatform->jenis_metode ?? '' }}</p>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 10H2M11 14H6M2 8.2L2 15.8C2 16.9201 2 17.4802 2.21799 17.908C2.40973 18.2843 2.71569 18.5903 3.09202 18.782C3.51984 19 4.07989 19 5.2 19L18.8 19C19.9201 19 20.4802 19 20.908 18.782C21.2843 18.5903 21.5903 18.2843 21.782 17.908C22 17.4802 22 16.9201 22 15.8V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.7157 21.2843 5.40974 20.908 5.21799C20.4802 5 19.9201 5 18.8 5L5.2 5C4.0799 5 3.51984 5 3.09202 5.21799C2.7157 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.07989 2 8.2Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> :
                        <p>{{ $pembayaran->metodePembayaranPlatform->nama_metode ?? '' }}</p>
                    </div>
                    @php
                        $status = $pembayaran->status_pembayaran ?? 'belum melakukan pembayaran';
                    @endphp
                    <p class="px-6 py-0.5 rounded-full bg-green-500/20 font-semibold text-green-500">
                        {{ $status }}</p>
                </div>
            </div>
            <div class="bg-white montserrat-font shadow-lg p-4 rounded-md w-full">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Entitas Penyewa (Kiri) -->
                    <div class="space-y-4">
                        <h2 class="font-bold text-md">Entitas Penyewa</h2>
                        <div class="flex gap-2 items-center">
                            <div
                                class="w-10 h-10 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs">Nama Penyewa</p>
                                <p class="text-sm montserrat-font font-bold">
                                    {{ $pemesanan->entitasPenyewa->nama_entitas }}</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div
                                class="w-10 h-10 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 7.99999V13C16 13.7956 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2043 16 19 16C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V12C21.9999 9.74302 21.2362 7.55247 19.8333 5.78452C18.4303 4.01658 16.4705 2.77521 14.2726 2.26229C12.0747 1.74936 9.76793 1.99503 7.72734 2.95936C5.68676 3.92368 4.03239 5.54995 3.03325 7.57371C2.03411 9.59748 1.74896 11.8997 2.22416 14.1061C2.69936 16.3125 3.90697 18.2932 5.65062 19.7263C7.39428 21.1593 9.57143 21.9603 11.8281 21.9991C14.0847 22.0379 16.2881 21.3122 18.08 19.94M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 7.99999 12 7.99999C14.2091 7.99999 16 9.79085 16 12Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs">Email Penyewa</p>
                                <p class="text-sm montserrat-font font-bold">
                                    {{ $pemesanan->entitasPenyewa->User->email }}</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div
                                class="w-10 h-10 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs">Nomor Telepon Penyewa</p>
                                <p class="text-sm montserrat-font font-bold">
                                    {{ $pemesanan->entitasPenyewa->User->no_telepon }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Data Perwakilan (Kanan) -->
                    <div class="space-y-4">
                        @if (!empty($pemesanan->perwakilan_penyewa))
                            <h2 class="font-bold text-md">Data Perwakilan</h2>
                            <div class="flex gap-2 items-center">
                                <div
                                    class="w-10 h-10 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs">Perwakilan Penyewa</p>
                                    <p class="text-sm montserrat-font font-bold">{{ $pemesanan->perwakilan_penyewa }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        @if (!empty($pemesanan->kontak_perwakilan))
                            <div class="flex gap-2 items-center">
                                <div
                                    class="w-10 h-10 bg-primary/20 text-primary flex items-center justify-center rounded-md">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs">Kontak Perwakilan</p>
                                    <p class="text-sm montserrat-font font-bold">{{ $pemesanan->kontak_perwakilan }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-full">
                <div class="bg-white shadow-lg p-4 rounded-md">
                    <h1 class="font-bold text-md montserrat-font">Ordered Items</h1>
                </div>

                @foreach ($pemesanan->detailPemesanan as $detail)
                    <div class="bg-white shadow-lg p-4 rounded-md mt-4 w-full">
                        <!-- Bagian Item -->
                        <div class="flex gap-2 justify-between items-center">
                            <div class="flex items-center gap-2">
                                <img class="w-24 h-24 object-cover rounded-sm"
                                    src="{{ $detail->unitKendaraan && $detail->unitKendaraan->kendaraan && $detail->unitKendaraan->kendaraan->fotos ? asset('/kendaraan/' . json_decode($detail->unitKendaraan->kendaraan->fotos)[0]) : 'https://via.placeholder.com/150' }}"
                                    alt="{{ $detail->unitKendaraan && $detail->unitKendaraan->kendaraan ? $detail->unitKendaraan->kendaraan->nama_kendaraan : 'Kendaraan Tidak Ditemukan' }}">
                                <div>
                                    <h1 class="font-bold text-lg montserrat-font">
                                        {{ $detail->unitKendaraan && $detail->unitKendaraan->kendaraan ? $detail->unitKendaraan->kendaraan->nama_kendaraan : 'Kendaraan Tidak Ditemukan' }}
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian Detail -->
                        <div class="flex flex-col justify-between items-start gap-4 mt-4">

                            <div class="w-full text-sm space-y-2 plus-jakarta-sans-font font-bold">
                                <div class="flex items-center justify-between">
                                    <p>Harga Kendaraan/Hari</p>
                                    <p>Rp
                                        {{ $detail->unitKendaraan && $detail->unitKendaraan->kendaraan ? number_format($detail->unitKendaraan->kendaraan->harga_sewa_perhari, 2, ',', '.') : 'N/A' }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="w-full grid grid-cols-2 gap-6 border border-gray-200 p-4 rounded-md bg-gray-100">
                                <div>
                                    <p class="text-sm montserrat-font">Metode Pengantaran</p>
                                    <p
                                        class="text-primary bg-primary/20 px-4 py-1 w-fit rounded-md mt-2 text-md font-semibold">
                                        {{ $detail->metode_pengantaran == 'diantar' ? 'Diantar' : 'Ambil di Tempat' }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm montserrat-font">Penggunaan Supir</p>
                                    <p
                                        class="text-primary bg-primary/20 px-4 py-1 w-fit rounded-md mt-2 text-md font-semibold">
                                        {{ $detail->tipe_penggunaan_sopir == 'tanpa_sopir' ? 'Tanpa Sopir' : 'Dengan Sopir' }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm montserrat-font">Time Start</p>
                                    <p class="w-fit rounded-md mt-2 font-medium">
                                        {{ date('D, d M Y - H:i', strtotime($detail->tanggal_mulai)) }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm montserrat-font">Time End</p>
                                    <p class="w-fit rounded-md mt-2 font-medium">
                                        {{ date('D, d M Y - H:i', strtotime($detail->tanggal_kembali)) }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm montserrat-font">Location Delivery</p>
                                    <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                        {{ $detail->lokasi_pengambilan }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm montserrat-font">Location Pengembalian</p>
                                    <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                        {{ $detail->lokasi_pengambilan }}
                                    </p>
                                </div>
                            </div>
                            @if ($detail->sopir)
                                <h1 class="font-bold montserrat-font">Information Sopir</h1>
                                <div class="w-full grid grid-cols-2 gap-6">
                                    <div>
                                        <p class="text-sm montserrat-font">Nama Sopir</p>
                                        <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                            {{ $detail->sopir->nama_sopir }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-sm montserrat-font">Nomor Telepon Sopir</p>
                                        <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                            {{ $detail->sopir->no_telepon }}
                                        </p>
                                    </div>
                                </div>
                            @elseif ($detail->pengemudiPemesanan)
                                <h1 class="font-bold montserrat-font">Information Pengemudi</h1>
                                <div class="w-full grid grid-cols-2 gap-6">
                                    <div>
                                        <p class="text-sm montserrat-font">Nama Sopir</p>
                                        <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                            {{ $detail->pengemudiPemesanan->nama_pengemudi }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-sm montserrat-font">Nomor Telepon Sopir</p>
                                        <p class="text-justify w-fit rounded-md mt-2 font-medium">
                                            {{ $detail->pengemudiPemesanan->no_telepon }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                @if ($detail->tipe_penggunaan_sopir == 'dengan_sopir' && $detail->id_sopir == null)
                                    <!-- Modal -->
                                    <div id="myModal"
                                        class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 transition-opacity duration-300 ease-in-out opacity-0">
                                        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                            <div class="flex justify-between items-center">
                                                <h2 class="text-xl font-semibold mb-4">Pilih Sopir</h2>
                                                <button onclick="closeModal()">
                                                    <svg width="25" height="25" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('mitra.pesanan.pilihSopir') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="flex flex-col">
                                                    <label for="">Daftar Supir</label>
                                                    <!-- Driver Search Component -->
                                                    <div class="relative w-full">
                                                        <div class="relative">
                                                            <input type="text" id="sopirSearch"
                                                                placeholder="Cari Sopir..."
                                                                class="w-full border border-gray-300 p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-300 outline-none transition-all"
                                                                autocomplete="off" />
                                                            <div
                                                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <circle cx="11" cy="11" r="8">
                                                                    </circle>
                                                                    <line x1="21" y1="21"
                                                                        x2="16.65" y2="16.65"></line>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                        <div id="sopirResults"
                                                            class="absolute w-full mt-1 bg-white rounded-lg shadow-lg border border-gray-200 z-10 hidden">
                                                            <ul class="py-1 max-h-60 overflow-auto"
                                                                id="sopirResultsList">
                                                                <!-- Results will be populated here -->
                                                            </ul>
                                                            <div id="noResults"
                                                                class="px-4 py-3 text-sm text-gray-500 hidden">
                                                                Tidak ada sopir ditemukan
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="id_sopir" id="selectedSopirId"
                                                            value="">
                                                    </div>
                                                    <input type="hidden" name="id_detail"
                                                        value="{{ $detail->id_detail }}">
                                                    <button type="submit"
                                                        class="group relative w-fit mt-4 flex items-center rounded-md bg-primary px-6 py-2 font-bold text-sm text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                                                        <span class="montserrat-font">Submit</span>
                                                        <span
                                                            class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 18L18 6M18 6H10M18 6V14"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <button onclick="openModal()"
                                        class="text-white montserrat-font bg-primary px-4 py-2 w-fit rounded-md mt-2 text-md font-semibold transition-all duration-300 ease-in-out hover:scale-105">
                                        Pilih Supir
                                    </button>
                                @endif
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h-max w-[35rem] space-y-4">
                <div class="bg-white shadow-lg rounded-lg p-4  flex flex-col gap-2">
                    <h6 class="text-md montserrat-font font-bold text-nowrap">Order Note</h6>
                    <p class="text-sm montserrat-font text-justify">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ipsa in obcaecati aut voluptates, labore dolor non necessitatibus quia modi
                        ipsam eos impedit illum corporis, iusto facilis deserunt aperiam mollitia nam!</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 w-full">
                    <div>
                        <h1 class="font-bold text-md montserrat-font">Progress Pemesanan</h1>
                    </div>
                    <div>
                        <div class="w-full mt-4 max-w-lg">
                            <div class="flex">
                                <!-- Timeline -->
                                <div class="flex flex-col items-center mr-4">
                                    <!-- 7:00 AM -->
                                    <div class="timeline-dot border-2 border-blue-100 bg-white" id="dot-0"></div>
                                    <div class="timeline-line h-14"></div>
                                    <!-- 8:00 AM -->
                                    <div class="timeline-dot border-2 border-blue-100 bg-white" id="dot-1"></div>
                                    <div class="timeline-line h-14"></div>
                                    <!-- 9:00 AM -->
                                    <div class="timeline-dot border-2 border-blue-100 bg-white" id="dot-2"></div>
                                    <div class="timeline-line h-14"></div>
                                    <!-- 10:00 AM -->
                                    <div class="timeline-dot border-2 border-blue-100 bg-white" id="dot-3"></div>
                                </div>

                                <!-- Schedule Cards -->
                                <div class="flex-1">
                                    <!-- Wakeup -->
                                    <div class="card mb-4 p-3 bg-gray-50 rounded-lg cursor-pointer" id="card-0"
                                        onclick="setActive(0)">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-medium text-gray-800">Order</h3>
                                                <p class="text-xs text-gray-500">Early wakeup from bed and fresh</p>
                                            </div>
                                            <span class="text-xs text-gray-500 text-nowrap">7:00 AM</span>
                                        </div>
                                    </div>
                                    <!-- Morning Exercise -->
                                    <div class="card mb-4 p-3 bg-gray-50 rounded-lg cursor-pointer" id="card-1"
                                        onclick="setActive(1)">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-medium text-gray-800">Review</h3>
                                                <p class="text-xs text-gray-500">4 types of exercise</p>
                                            </div>
                                            <span class="text-xs text-gray-500 text-nowrap">8:00 AM</span>
                                        </div>
                                    </div>
                                    <!-- Meeting -->
                                    <div class="card mb-4 p-3 bg-gray-50 rounded-lg cursor-pointer" id="card-2"
                                        onclick="setActive(2)">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-medium text-gray-800">Payment</h3>
                                                <p class="text-xs text-gray-500">Zoom call, Discuss team task for the
                                                    day
                                                </p>
                                            </div>
                                            <span class="text-xs text-gray-500 text-nowrap">9:00 AM</span>
                                        </div>
                                    </div>
                                    <!-- Breakfast -->
                                    <div class="card p-3 bg-gray-50 rounded-lg cursor-pointer" id="card-3"
                                        onclick="setActive(3)">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-medium text-gray-800">Completed</h3>
                                                <p class="text-xs text-gray-500">Morning breakfast with bread, banana
                                                    egg
                                                    bowl and tea.</p>
                                            </div>
                                            <span class="text-xs text-gray-500 text-nowrap">10:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script>
        // Initialize the sopirData array with Laravel data
        let sopirData = [
            @foreach ($sopir as $item)
                {
                    id: "{{ $item->id_sopir }}",
                    name: "{{ $item->nama_sopir }}"
                },
            @endforeach
        ];

        document.addEventListener('DOMContentLoaded', function() {
            // Show initial suggestions (top 3)
            showInitialSuggestions();

            // Set up event listeners
            setupEventListeners();
        });

        function showInitialSuggestions() {
            const resultsList = document.getElementById('sopirResultsList');
            const resultsContainer = document.getElementById('sopirResults');

            // Clear previous results
            resultsList.innerHTML = '';

            // Get first 3 items from sopirData
            const suggestions = sopirData.slice(0, 3);

            // Add results to the list
            suggestions.forEach(sopir => {
                addResultItem(sopir, resultsList);
            });

            // Show results container
            resultsContainer.classList.remove('hidden');
        }

        function filterSopir() {
            const input = document.getElementById('sopirSearch');
            const filter = input.value.toLowerCase();
            const resultsContainer = document.getElementById('sopirResults');
            const resultsList = document.getElementById('sopirResultsList');
            const noResults = document.getElementById('noResults');

            // Clear previous results
            resultsList.innerHTML = '';

            // Hide no results message initially
            noResults.classList.add('hidden');

            // Filter data
            const filteredData = sopirData.filter(sopir =>
                sopir.name.toLowerCase().includes(filter)
            ).slice(0, 3); // Limit to 3 results

            if (filteredData.length > 0) {
                // Add results to the list
                filteredData.forEach(sopir => {
                    addResultItem(sopir, resultsList);
                });
            } else {
                // Show no results message
                noResults.classList.remove('hidden');
            }

            // Show results container
            resultsContainer.classList.remove('hidden');
        }

        function addResultItem(sopir, resultsList) {
            const li = document.createElement('li');
            li.classList.add('px-4', 'py-2', 'hover:bg-gray-100', 'cursor-pointer', 'text-sm');

            // Create result item content
            li.innerHTML = sopir.name;

            // Add click event
            li.addEventListener('click', function() {
                selectSopir(sopir.id, sopir.name);
            });

            resultsList.appendChild(li);
        }

        function selectSopir(id, name) {
            const input = document.getElementById('sopirSearch');
            const idInput = document.getElementById('selectedSopirId');
            const resultsContainer = document.getElementById('sopirResults');

            // Set the input value to the selected name
            input.value = name;

            // Set the hidden input value to the selected id
            idInput.value = id;

            // Hide results container
            resultsContainer.classList.add('hidden');
        }

        function setupEventListeners() {
            const input = document.getElementById('sopirSearch');
            const resultsContainer = document.getElementById('sopirResults');

            // Show suggestions when input is focused
            input.addEventListener('focus', function() {
                if (input.value.trim() === '') {
                    showInitialSuggestions();
                } else {
                    filterSopir();
                }
            });

            // Filter as user types
            input.addEventListener('input', filterSopir);

            // Hide results when clicking outside
            document.addEventListener('click', function(e) {
                if (!input.contains(e.target) && !resultsContainer.contains(e.target)) {
                    resultsContainer.classList.add('hidden');
                }
            });

            // Prevent form submission on Enter
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    return false;
                }
            });
        }
    </script>
    <script>
        function openModal() {
            const modal = document.getElementById("myModal");
            modal.classList.remove("hidden");
            // Trigger transition
            setTimeout(() => {
                modal.classList.remove("opacity-0");
                modal.classList.add("opacity-100");
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById("myModal");
            modal.classList.remove("opacity-100");
            modal.classList.add("opacity-0");
            // Wait for transition to finish before hiding
            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300); // Match duration-300
        }
    </script>
    <script>
        // Store the active step from window.onload
        let initialActiveStep;

        // Set the initial active step when the page loads
        window.onload = function() {
            initialActiveStep = 2; // Untuk menyelesaikan progress order buat lebih dari 3
            setActive(initialActiveStep);
        };
    </script>
</x-mitra-layout>
