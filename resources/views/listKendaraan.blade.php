<x-user-layout title="Daftar Kendaraan">
    <div class="px-6 my-4">
        <h1 class="my-4 text-2xl font-bold montserrat-font">Daftar Kendaraan</h1>
        <div class="flex flex-col items-end justify-between my-4">
            <div class="w-full bg-white rounded-xl shadow-md border border-gray-100 p-5">
                <h3 class="text-xl font-bold text-gray-800 mb-5">Cari & Filter</h3>
                <form id="formFilter" class=" grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <!-- Search Box -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari
                            Kendaraan</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-3 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
                                placeholder="Toyota Calya, Agya...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Filter by Type -->
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Tipe</h4>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox"
                                    class="form-checkbox h-5 w-5 text-primary rounded border-gray-300 focus:ring-primary"
                                    checked>
                                <span class="text-gray-700">Mobil</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox"
                                    class="form-checkbox h-5 w-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <span class="text-gray-700">Motor</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Filter Berdasarkan Transmisi</h4>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox"
                                    class="form-checkbox h-5 w-5 text-primary rounded border-gray-300 focus:ring-primary"
                                    checked>
                                <span class="text-gray-700">Manual</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox"
                                    class="form-checkbox h-5 w-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <span class="text-gray-700">Automatic</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filter by Year -->
                    <div class="col-span-2 md:col-span-1">
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Tahun Pembuatan</h4>
                        <div class="flex items-center space-x-3">
                            <select
                                class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary w-full">
                                <option>2018</option>
                                <option>2019</option>
                                <option selected>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                            <span class="text-gray-500">s/d</span>
                            <select
                                class="bg-gray-50 border border-gray-200 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary w-full">
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option selected>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-end gap-4">
                        <!-- Apply Filters Button -->
                        <button type="submit"
                            class="w-full h-fit bg-primary hover:bg-primary text-white font-medium py-2 px-4 rounded-lg transition-colors shadow-sm flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-2">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                            </svg>
                            Terapkan Filter
                        </button>

                    </div>
                    <!-- Reset Filters link -->
                    <div class="mt-3 flex items-end text-center">
                        <button type="button" onclick="document.getElementById('formFilter').reset()"
                            class="text-sm w-full rounded-md bg-primary/20 font-medium text-primary py-2 px-4 hover:text-primary hover:underline">Reset
                            Semua
                            Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8">
            @for ($i = 0; $i < 1; $i++)
                <div
                    class="car-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 transform transition-all duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left side with image -->
                        <div class="w-full md:w-2/5 p-4 bg-gray-50">
                            <div class="w-full h-[220px] p-4 bg-gray-50">
                                <swiper-container class="mySwiper w-full h-full" pagination="true"
                                    pagination-clickable="true" navigation="true" space-between="30"
                                    centered-slides="true" autoplay-delay="2500"
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
                                <h3 class="text-2xl font-bold text-gray-800">Toyota Calya</h3>
                                <span
                                    class="text-sm font-medium text-primary bg-primary/20 px-3 py-1 rounded-full">Mobil</span>
                            </div>

                            <!-- Color -->
                            <div class="mt-3 flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-red-500 border-2 border-white shadow"></div>
                                <p class="text-base font-medium text-gray-700">Merah</p>
                            </div>
                        </div>

                        <!-- Right side with details -->
                        <div class="w-full md:w-3/5 p-6 bg-white">
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2">
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
                                        <p class="text-base font-medium text-gray-800">2020</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <path d="M5 9l2 -2v10l-2 -2z"></path>
                                        <path d="M15 5l0 14"></path>
                                        <path d="M19 5l0 14"></path>
                                        <path d="M15 9l-2 2l2 2"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tipe Transmisi</p>
                                        <p class="text-base font-medium text-gray-800">Manual</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <path
                                            d="M14 6a2 2 0 1 0 -4 0c0 .932 .14 1.807 .4 2.602l-.89 .9l.808 .8l.89 -.9a7.499 7.499 0 0 0 2.392 .498v2.1h1v-2.1a7.5 7.5 0 0 0 2.392 -.498l.89 .9l.808 -.8l-.89 -.9c.26 -.795 .4 -1.67 .4 -2.602a2 2 0 1 0 -4 0">
                                        </path>
                                        <path d="M12 13v8"></path>
                                        <path d="M9 17l3 3l3 -3"></path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Tenaga Mesin</p>
                                        <p class="text-base font-medium text-gray-800">1197 cc</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Kapasitas Tempat Duduk</p>
                                        <p class="text-base font-medium text-gray-800">6 seat</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center gap-4 border-t border-gray-100 pt-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                                    <span
                                        class="text-sm font-medium bg-primary/20 text-primary px-3 py-1 rounded">TYT-CLY-001</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-700">Milik Perusahaan:</span>
                                    <span
                                        class="text-sm font-medium bg-primary/20 text-primary px-3 py-1 rounded">Pengusaha
                                        Sukses</span>
                                </div>
                            </div>
                            <div class="w-full flex justify-end">
                                <a href="{{ route('pesanKendaraan') }}"
                                    class="group w-fit text-sm rounded-md relative flex items-center bg-purple px-6 py-2 mt-4 font-bold bg-primary text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                                    <span>DAPATKAN TIKET</span>
                                    <span
                                        class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 2H3.30616C3.55218 2 3.67519 2 3.77418 2.04524C3.86142 2.08511 3.93535 2.14922 3.98715 2.22995C4.04593 2.32154 4.06333 2.44332 4.09812 2.68686L4.57143 6M4.57143 6L5.62332 13.7314C5.75681 14.7125 5.82355 15.2031 6.0581 15.5723C6.26478 15.8977 6.56108 16.1564 6.91135 16.3174C7.30886 16.5 7.80394 16.5 8.79411 16.5H17.352C18.2945 16.5 18.7658 16.5 19.151 16.3304C19.4905 16.1809 19.7818 15.9398 19.9923 15.6342C20.2309 15.2876 20.3191 14.8247 20.4955 13.8988L21.8191 6.94969C21.8812 6.62381 21.9122 6.46087 21.8672 6.3335C21.8278 6.22177 21.7499 6.12768 21.6475 6.06802C21.5308 6 21.365 6 21.0332 6H4.57143ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM18 21C18 21.5523 17.5523 22 17 22C16.4477 22 16 21.5523 16 21C16 20.4477 16.4477 20 17 20C17.5523 20 18 20.4477 18 21Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <script>
        document.querySelectorAll("#colorPicker div").forEach(color => {
            color.addEventListener("click", function() {
                // Hapus class terpilih dari semua warna
                document.querySelectorAll("#colorPicker div").forEach(c => c.classList.remove("ring-2",
                    "ring-primary"));

                // Tambahkan efek terpilih pada warna yang dipilih
                this.classList.add("ring-2", "ring-primary");

                // Set nilai warna ke input tersembunyi
                document.getElementById("selectedColor").value = this.dataset.color;
            });
        });
    </script>
</x-user-layout>
