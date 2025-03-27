<div
    class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 transform transition-all duration-300 ease-in-out ">
    <div class="flex flex-col md:flex-row">
        <!-- Left side with image -->
        <div class="w-full md:w-2/5 p-4 bg-gray-50">
            <div class="w-full h-[220px] p-4 bg-gray-50">
                <swiper-container class="mySwiper w-full h-full" pagination="true" pagination-clickable="true"
                    navigation="true" space-between="30" centered-slides="true" autoplay-delay="2500"
                    autoplay-disable-on-interaction="false">
                    <swiper-slide class="w-full h-full">
                        <img src="https://i.pinimg.com/736x/57/ba/e6/57bae6c4d573cc6d749f6035702691b5.jpg"
                            class="h-full w-full object-contain" alt="">
                    </swiper-slide>
                    <swiper-slide class="w-full h-full">
                        <img src="https://i.pinimg.com/736x/7a/be/a3/7abea31dc03f1c1c56a13860e8ca6632.jpg"
                            class="h-full w-full object-contain" alt="">
                    </swiper-slide>
                </swiper-container>
            </div>

            <!-- Car Name and Badge -->
            <div class="mt-4 flex items-center justify-between">
                {{-- {{$kendaraan}} --}}
                <h3 class="text-2xl font-bold text-gray-800">
                    {{$kendaraan->nama_kendaraan}}</h3>
                <span
                    class="text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">{{$kendaraan->kategoriKendaraan->jenisKendaraan->nama_jenis}}</span>
            </div>

            <!-- Color -->
            <div class="mt-3 flex items-center space-x-3">
                <div class="w-8 h-8 rounded-full bg-[{{$kendaraan->warna}}] border-2 border-white shadow">
                </div>
                <p class="text-base font-medium text-gray-700">{{$kendaraan->warna}}</p>
            </div>
        </div>

        <!-- Right side with details -->
        <div class="w-full md:w-3/5 p-6 bg-white">
            <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-blue-500">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                        </rect>
                        <line x1="16" y1="2" x2="16" y2="6">
                        </line>
                        <line x1="8" y1="2" x2="8" y2="6">
                        </line>
                        <line x1="3" y1="10" x2="21" y2="10">
                        </line>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500">Tahun Pembuatan</p>
                        <p class="text-base font-medium text-gray-800">{{$kendaraan->tahun_produksi}}</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-blue-500">
                        <path d="M5 9l2 -2v10l-2 -2z"></path>
                        <path d="M15 5l0 14"></path>
                        <path d="M19 5l0 14"></path>
                        <path d="M15 9l-2 2l2 2"></path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500">Tipe Transmisi</p>
                        <p class="text-base font-medium text-gray-800 capitalize">{{$kendaraan->transmisi}}</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-blue-500">
                        <path
                            d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0">
                        </path>
                        <path d="M12 13v8"></path>
                        <path d="M9 17l3 3l3 -3"></path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500">Tenaga Mesin</p>
                        <p class="text-base font-medium text-gray-800">{{$kendaraan->cubic_centimeter}} cc</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-blue-500">
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855">
                        </path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500">Kapasitas Tempat Duduk</p>
                        <p class="text-base font-medium text-gray-800">{{$kendaraan->jumlah_kursi}} seat</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between border-t border-gray-100 pt-4">
                <div class="flex items-center space-x-2">
                    <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                    <span class="text-sm font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded">TYT-CLY-001</span>
                </div>
            </div>
        </div>
    </div>
</div>