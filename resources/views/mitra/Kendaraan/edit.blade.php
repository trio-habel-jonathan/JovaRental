<x-mitra-layout title="Dashboard">
    <div class="p-4">
        <div>

            <div class="bg-white rounded-xl p-6 sm:p-8">
                <div class="text-center mb-10">
                    <h1
                        class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 inline-block mb-3">
                        Perbarui Data Kendaraan</h1>
                    <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full mb-3"></div>
                    <p class="text-gray-500">Silakan isi data kendaraan dengan lengkap</p>
                </div>

                <form action="{{route('mitra.kendaraan.editkendaraan', $kendaraan->id_kendaraan)}}"
                    enctype="multipart/form-data" method="post" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @csrf
                    @method("PUT")
                    <!-- Card Informasi Dasar -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 animated-icon"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                Informasi Dasar
                            </h2>

                            <div class="mb-4">
                                <label for="nama-kendaraan" class="block mb-2 font-medium text-gray-700">Nama
                                    Kendaraan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->nama_kendaraan}}" type="text" id="nama-kendaraan"
                                        name="nama_kendaraan"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: Toyota Avanza" required>
                                </div>
                                @error('nama_kendaraan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="id_kategori" class="block mb-2 font-medium text-gray-700">Kategori
                                    Kendaraan</label>
                                <select id="id_kategori" name="id_kategori"
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                    required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategoriKendaraan as $kategori)
                                    <option {{$kendaraan->id_kategori == $kategori->id_kategori ? "selected" : ""}}
                                        value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }} ({{
                                        $kategori->jenisKendaraan->nama_jenis }})</option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="tahun_produksi" class="block mb-2 font-medium text-gray-700">Tahun
                                    Pembuatan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->tahun_produksi}}" type="number" id="tahun_produksi"
                                        name="tahun_produksi" min="1900" max="2025"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 2020" required>
                                </div>
                                @error('tahun_produksi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="warna" class="block mb-2 font-medium text-gray-700">Warna</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->warna}}" type="text" id="warna" name="warna"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: Putih Metalik" required>
                                </div>
                                @error('warna')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Card Spesifikasi Teknis -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span
                                    class="flex items-center justify-center w-10 h-10 bg-indigo-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-indigo-600 animated-icon" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                Spesifikasi Teknis
                            </h2>

                            <div class="mb-4">
                                <label class="block mb-2 font-medium text-gray-700">Tipe Transmisi</label>
                                <div class="flex flex-wrap gap-3">
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input {{$kendaraan->transmisi == "manual" ? "checked" : ""}} type="radio"
                                        id="manual" name="transmisi" value="manual"
                                        class="w-4 h-4 text-indigo-600 focus:ring-indigo-500" checked>
                                        <label for="manual" class="ml-2 text-gray-700 font-medium">Manual</label>
                                    </div>
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input {{$kendaraan->transmisi == "automatic" ? "checked" : ""}} type="radio"
                                        id="automatic" name="transmisi" value="automatic"
                                        class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                        <label for="automatic" class="ml-2 text-gray-700 font-medium">Automatic</label>
                                    </div>
                                    <div
                                        class="relative flex items-center pl-4 pr-6 py-2 border border-gray-200 rounded-lg cursor-pointer hover:bg-indigo-50 transition">
                                        <input {{$kendaraan->transmisi == "kopling" ? "checked" : ""}} type="radio"
                                        id="kopling" name="transmisi" value="kopling"
                                        class="w-4 h-4 text-indigo-600 focus:ring-indigo-500">
                                        <label for="kopling" class="ml-2 text-gray-700 font-medium">Kopling</label>
                                    </div>
                                </div>
                                @error('transmisi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cubic_centimeter" class="block mb-2 font-medium text-gray-700">Tenaga
                                    Mesin (CC)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->cubic_centimeter}}" type="number" id="cubic_centimeter"
                                        name="cubic_centimeter"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 1500" required>
                                </div>
                                @error('cubic_centimeter')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="harga_sewa_perhari" class="block mb-2 font-medium text-gray-700">Harga
                                    Sewa Perhari</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->harga_sewa_perhari}}" type="number"
                                        id="harga_sewa_perhari" name="harga_sewa_perhari" min="1"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 250000" required>
                                </div>

                            </div>


                            <div class="mb-4">
                                <label for="jumlah_kursi" class="block mb-2 font-medium text-gray-700">Kapasitas
                                    Tempat Duduk</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->jumlah_kursi}}" type="number" id="jumlah_kursi"
                                        name="jumlah_kursi" min="1" max="50"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: 5" required>
                                </div>
                                @error('jumlah_kursi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="mb-4">
                                <label for="plat_nomor" class="block mb-2 font-medium text-gray-700">Nomor
                                    Plat</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                        </svg>
                                    </div>
                                    <input value="{{$kendaraan->plat_nomor}}" type="text" id="plat_nomor"
                                        name="plat_nomor"
                                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                        placeholder="Contoh: B 1234 XYZ" required>
                                </div>
                                @error('plat_nomor')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                    </div>

                    <!-- UPDATED: Card Unggah Gambar with multiple images and preview -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-0.5">
                        <div class="bg-white rounded-xl p-6 custom-shadow card-hover h-full">
                            <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                                <span
                                    class="flex items-center justify-center w-10 h-10 bg-purple-100 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-purple-600 animated-icon" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                Foto Kendaraan
                            </h2>

                            <div id="upload-container">
                                @php
                                $decode_foto = json_decode($kendaraan->fotos);
                                @endphp

                                <!-- Image counter -->
                                <div class="upload-counter mb-3">
                                    <span id="image-count">{{count($decode_foto)}}</span>/3 foto diunggah
                                </div>

                                <!-- Image previews section -->
                                <div class="mt-5">
                                    <h3 class="text-md font-medium text-gray-700 mb-3">Foto yang Tersimpan</h3>
                                    <div class="grid grid-cols-3 gap-3">
                                        <!-- Image 1 -->
                                        @foreach ($decode_foto as $foto)
                                        <div class="relative group">
                                            <div class="relative rounded-lg overflow-hidden border border-gray-200">
                                                <img src="{{asset('kendaraan/' . $foto)}}" alt="Foto Mobil 1"
                                                    class="w-full h-24 object-cover" id="preview-{{$loop->iteration}}">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center p-2">
                                                    <input id="file_input_toggle-{{$loop->iteration}}" type="file"
                                                        class="hidden" name="file_upload[][foto]">
                                                    <label for="file_input_toggle-{{$loop->iteration}}"
                                                        class="text-white cursor-pointer bg-red-500 hover:bg-red-600 rounded-full p-1 transition transform hover:scale-110">
                                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg> --}}

                                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M21 15V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V15M17 8L12 3M12 3L7 8M12 3V15"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 truncate text-center">{{$foto}}
                                            </div>
                                        </div>
                                        @endforeach
                                        @error('file_upload.*')
                                        <p class="text-[red]">{{ $message }}</p>
                                        @enderror
                                        @error('file_upload')
                                        <p class="text-[red]">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- JavaScript for Live Preview -->
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                    document.querySelectorAll("input[type='file']").forEach(input => {
                                        input.addEventListener("change", function (event) {
                                            let file = event.target.files[0]; // Get the uploaded file
                                            if (file) {
                                                let reader = new FileReader();
                                                let previewImg = document.getElementById("preview-" + event.target.id.split('-')[1]);
                            
                                                reader.onload = function (e) {
                                                    previewImg.src = e.target.result; // Update the preview image
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    });
                                });
                                </script>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="mt-8 flex justify-between items-center space-x-4">
                        <!-- Tombol Back -->
                        <a href="{{ url()->previous() }}"
                            class="w-1/2 text-center bg-gray-100 text-gray-700 py-3.5 px-4 rounded-xl hover:bg-gray-200 transition-all font-medium flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            Kembali
                        </a>

                        <!-- Tombol Save -->
                        <button type="submit"
                            class="w-1/2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3.5 px-4 rounded-xl hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all font-medium flex items-center justify-center button-effect">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                            </svg>
                            Perbarui
                        </button>
                    </div>
                    <div class="mt-2 text-xs text-center text-gray-500">
                        Dengan menekan tombol ini, Anda menyetujui Syarat dan Ketentuan yang berlaku
                    </div>

                </form>
            </div>
        </div>
        <a href="{{ route('mitra.kendaraan.kendaraanmitraView') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-mitra-layout>