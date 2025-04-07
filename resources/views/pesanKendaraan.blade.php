<x-user-layout title="Pemesanan">

    <div class="flex flex-col lg:flex-row w-full min-h-screen gap-4 p-4">
        <!-- Sisi Kiri (Form Section) -->
        <div class="order-1 sm:order-1 w-full rounded-md bg-white p-6 md:p-8 rounded-tl-2xl rounded-bl-2xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                Data Kendaraan
            </h1>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all mb-6 border border-gray-100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="w-full flex flex-col xl:flex-row gap-2">
                        <img class="w-full aspect-video object-cover rounded-md shadow-sm"
                            src="https://i.pinimg.com/736x/85/0a/ca/850aca7cd77c110e99ab20862aef14cf.jpg"
                            alt="">
                        <div class="grid grid-cols-3 xl:grid-cols-1 gap-2">
                            <img class="w-full xl:w-[7.7rem] aspect-square object-cover rounded-md shadow-sm"
                                src="https://i.pinimg.com/736x/85/0a/ca/850aca7cd77c110e99ab20862aef14cf.jpg"
                                alt="">
                            <img class="w-full xl:w-[7.7rem] aspect-square object-cover rounded-md shadow-sm"
                                src="https://i.pinimg.com/736x/85/0a/ca/850aca7cd77c110e99ab20862aef14cf.jpg"
                                alt="">
                            <img class="w-full xl:w-[7.7rem] aspect-square object-cover rounded-md shadow-sm"
                                src="https://i.pinimg.com/736x/85/0a/ca/850aca7cd77c110e99ab20862aef14cf.jpg"
                                alt="">
                        </div>
                    </div>
                    <!-- Right side with details -->
                    <div class="w-full bg-white">
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Spesifikasi Kendaraan</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                            <div class="flex items-center space-x-3 p-3 bg-primary/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <div>
                                    <p class="text-xs text-gray-500">Tahun Pembuatan</p>
                                    <p class="text-base font-medium text-gray-800">2020</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3 p-3 bg-primary/10 rounded-lg">
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

                            <div class="flex items-center space-x-3 p-3 bg-primary/10 rounded-lg">
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

                            <div class="flex items-center space-x-3 p-3 bg-primary/10 rounded-lg">
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

                            <div class="flex items-center space-x-3 p-3 bg-primary/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <path d="M5 9l2 -2v10l-2 -2z"></path>
                                    <path d="M15 5l0 14"></path>
                                    <path d="M19 5l0 14"></path>
                                    <path d="M15 9l-2 2l2 2"></path>
                                </svg>
                                <div>
                                    <p class="text-xs text-gray-500">Kategori Kendaraan</p>
                                    <p class="text-base font-medium text-gray-800">Hypercar</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap items-start gap-6 border-t border-gray-100 pt-4">
                            <div class="flex flex-col items-start">
                                <span class="text-sm font-medium text-gray-700">ID Kendaraan:</span>
                                <span
                                    class="text-sm font-medium bg-primary/10 text-primary px-3 py-1 rounded">TYT-CLY-001</span>
                            </div>
                            <div class="flex flex-col items-start">
                                <span class="text-sm font-medium text-gray-700">Milik Perusahaan:</span>
                                <span
                                    class="text-sm font-medium bg-primary/10 text-primary px-3 py-1 rounded">Pengusaha
                                    Sukses</span>
                            </div>
                            <div class="flex flex-col items-start">
                                <span class="text-sm font-medium text-gray-700">Color:</span>
                                <span class="text-sm font-medium bg-gray-200 text-primary w-36 h-6 rounded"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h6 class="text-xl mb-2 font-bold text-gray-700 plus-jakarta-sans-font">Description Car</h6>
                    <p class="montserrat-font text-justify">The Porsche 911 is an iconic sports car that blends
                        timeless design, exhilarating
                        performance, and
                        cutting-edge technology. First introduced in 1964, the 911 has evolved over generations while
                        maintaining its signature rear-engine layout and unmistakable silhouette. Powered by a
                        high-performance flat-six engine, the 911 delivers exceptional speed, agility, and handling,
                        making
                        it a favorite among driving enthusiasts. Available in various trims, including the Carrera,
                        Turbo,
                        and GT3, it offers a perfect balance of luxury and track-ready performance. With its precision
                        engineering and legendary status, the Porsche 911 remains one of the most revered sports cars in
                        automotive history.</p>
                </div>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-6 text-gray-800 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                Detail Pemesanan
            </h1>
            <form action="" method="POST"
                class="p-4 flex flex-col lg:flex-row montserrat-font gap-8 rounded-xl border border-gray-100 transition-all duration-300 ease-in-out hover:shadow-md">
                <div class="w-full lg:w-2/4 xl:w-3/4 grid grid-cols-1 xl:grid-cols-2 h-fit gap-4">
                    <h1 class="col-span-1 xl:col-span-2 font-bold uppercase">Order Rent Detail</h1>
                    <div>
                        <label for="tipe_rental" class="block mb-2 text-base font-semibold text-gray-500">Tipe
                            Rental</label>
                        <div class="relative">
                            <select name="tipe_rental" id="tipe_rental" onchange="metodePengantaran()"
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                                <option value="">Pilih Tipe</option>
                                <option value="lepas_kunci">Lepas Kunci</option>
                                <option value="dengan_supir">Dengan Supir</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="hidden flex-col" id="input-penggunaan-supir">
                        <label for="penggunaan_supir"
                            class="block mb-2 text-base font-semibold text-gray-500">Penggunaan Supir</label>
                        <div class="relative">
                            <select name="penggunaan_supir" id="penggunaan_supir" onchange="metodePengantaran()"
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                                <option value="">Pilih Penggunaan Supir</option>
                                <option value="mengantar_saja">Mengantar Saja</option>
                                <option value="sepanjang_hari">Sepanjang Hari</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div id="input-metode-pengantaran" class="flex-col">
                        <label for="metode_pengantaran"
                            class="block mb-2 text-base font-semibold text-gray-500">Metode
                            Pengantaran</label>
                        <div class="relative">
                            <select name="metode_pengantaran" id="metode_pengantaran" onchange="metodePengantaran()"
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                                <option value="">Pilih Metode</option>
                                <option value="diantar">Diantar</option>
                                <option value="ambil_ditempat">Ambil Di Tempat</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_mulai" class="block mb-2 text-base font-semibold text-gray-500">Tanggal
                            Mulai</label>
                        <div class="relative">
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai"
                                placeholder="Tanggal Mulai Rental..."
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_selesai" class="block mb-2 text-base font-semibold text-gray-500">Tanggal
                            Selesai</label>
                        <div class="relative">
                            <input type="date" id="tanggal_selesai" name="tanggal_selesai"
                                placeholder="Tanggal Selesai Rental..."
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                        </div>
                    </div>
                    <div class="col-span-1 xl:col-span-2" id="input_lokasi_pengantaran">
                        <label for="lokasi_pengantaran"
                            class="block mb-2 text-base font-semibold text-gray-500">Lokasi
                            Pengantaran</label>
                        <div class="relative">
                            <input type="text" id="lokasi_pengantaran" name="lokasi_pengantaran"
                                placeholder="Lokasi Pengantaran..."
                                class="appearance-none w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all bg-white">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-2/4">
                    <h1 class="font-bold uppercase">Order Sumamry</h1>
                    <ul class="w-full mt-4 space-y-2">
                        <li id="display-biaya-supir" class="flex w-full justify-between items-center">
                            <p class="text-sm font-medium">Biaya Supir/Jam</p>
                            <p class="text-sm font-medium">RP 25.000</p>
                            <input type="hidden" readonly class="border-none focus:outline-none" value="10.000">
                        </li>
                        <li id="display-biaya-pengantaran" class="flex w-full justify-between items-center">
                            <p class="text-sm font-medium">Biaya Pengantaran</p>
                            <p class="text-sm font-medium">RP 15.000</p>
                            <input type="hidden" readonly class="border-none focus:outline-none" value="10.000">
                        </li>
                        <li class="flex justify-between items-center">
                            <p class="text-sm font-medium">Rent per Hour</p>
                            <p class="text-sm font-medium">RP 400.000</p>
                        </li>
                        <div class="py-8">
                            <div class="w-full h-[1px] bg-gray-200"></div>
                        </div>
                        <li class="flex justify-between items-center">
                            <p class="text-sm font-medium">Subtotal Harga</p>
                            <p class="text-xl font-bold">RP 415.000</p>
                            <input type="hidden" readonly class="border-none focus:outline-none" value="400.000">
                        </li>
                    </ul>
                    <div class="mt-4 p-4 bg-primary/20 rounded-md">
                        <p class="font-bold">Note:</p>
                        <p class="text-sm">Apabila pesanan diambil di tempat maka biaya pengantaran tidak akan masuk
                            kedalam harga rental</p>
                    </div>
                    <div class="flex gap-2">
                        @if (str_contains(url()->previous(), 'pemesanan/review'))
                            <a href="{{ route('review') }}"
                                class="font-bold text-primary hover:text-white bg-gray-200 hover:bg-primary rounded-md shadow-lg text-cneter py-2 mt-4 transition-all duration-300 ease-in-out px-6 hover:scale-105">Back</a>
                        @endif
                        <button type="submit"
                            class="font-bold text-white bg-primary rounded-md shadow-lg text-cneter py-2 mt-4 transition-all duration-300 ease-in-out px-6 hover:scale-105">Simpan
                            Pesanan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function metodePengantaran() {
            const metodePengantaranSelect = document.getElementById('metode_pengantaran');
            const tipeRentalValue = document.getElementById('tipe_rental').value;
            const penggunaanSupirValue = document.getElementById('penggunaan_supir').value;
            const metodePengantaranValue = metodePengantaranSelect.value;

            const metodePengantaranDiv = document.getElementById('input-metode-pengantaran');
            const penggunaanSupirDiv = document.getElementById('input-penggunaan-supir');

            const displayBiayaPengantaran = document.getElementById('display-biaya-pengantaran');
            const displayBiayaSupir = document.getElementById('display-biaya-supir');

            // Jika tipe rental "lepas kunci"
            if (tipeRentalValue === "lepas_kunci") {
                metodePengantaranDiv.style.display = "flex"; // Tampilkan metode pengantaran
                penggunaanSupirDiv.style.display = "none"; // Sembunyikan penggunaan supir
                displayBiayaSupir.style.display = "none"; // Sembunyikan biaya supir
            }

            // Jika tipe rental "dengan supir"
            if (tipeRentalValue === "dengan_supir") {
                penggunaanSupirDiv.style.display = "flex"; // Tampilkan penggunaan supir
                metodePengantaranDiv.style.display = "none"; // Sembunyikan metode pengantaran
                displayBiayaPengantaran.style.display = "none"; // Sembunyikan biaya pengantaran
            }

            // Jika metode pengantaran "diantar" & tipe rental "lepas kunci"
            if (metodePengantaranValue === "diantar" && tipeRentalValue === "lepas_kunci") {
                displayBiayaPengantaran.style.display = "flex";
            } else if (metodePengantaranValue === "ambil_ditempat") {
                displayBiayaPengantaran.style.display = "none";
            }

            // Jika penggunaan supir "mengantar saja"
            if (penggunaanSupirValue === "mengantar_saja" && tipeRentalValue === "dengan_supir") {
                displayBiayaPengantaran.style.display = "flex";
                displayBiayaSupir.style.display = "none"; // Sembunyikan biaya supir
            }

            // Jika penggunaan supir "sepanjang hari"
            if (penggunaanSupirValue === "sepanjang_hari" && tipeRentalValue === "dengan_supir") {
                displayBiayaSupir.style.display = "flex";
                displayBiayaPengantaran.style.display = "none"; // Sembunyikan biaya pengantaran
            }
        }
    </script>
</x-user-layout>
