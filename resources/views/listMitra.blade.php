<x-user-layout title="Daftar Kendaraan">
    <div class="px-6 my-4 max-w-[1600px] mx-auto">
        <h1 class="my-4 text-2xl font-bold montserrat-font">Daftar Mitra</h1>
        <div class="flex flex-col-reverse lg:flex-row gap-4">
            <div class="grid grid-cols-1 gap-8 w-full">
           @foreach ($allMitra as $item)
           <a href="{{ route('daftarKendaraan') }}">
            <div
                class="mitra-card flex-1 h-fit bg-white rounded-xl shadow-md p-4 overflow-hidden border border-gray-100 transform transition-all duration-300 ease-in-out hover:-translate-y-2">
                <div class="flex flex-col items-center lg:items-start gap-4 lg:flex-row">
                    <img class="w-48 h-48 object-cover"
                        src="https://i.pinimg.com/736x/39/ea/d6/39ead63b3820b30f3b183175f70e1d75.jpg"
                        alt="">
                    <div class="plus-jakarta-sans-font space-y-2">
                        <h1 class="text-2xl font-bold montserrat">{{$item->nama_mitra}}</h1>
                        <p class="font-semibold">{{$item->user->no_telepon}}</p>
                        @foreach ($item->hasAlamatMitra as $alamat)
                        <p class="w-full text-justify">
                            {{$alamat->alamat}}
                        </p>
                        @endforeach
                       
                        <ul class="flex gap-4 items-center font-semibold text-sm">
                            <li class="flex gap-2 items-center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p>{{count($item->kendaraans)}} Cars Available</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-message-circle-more-icon lucide-message-circle-more">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                    <path d="M8 12h.01" />
                                    <path d="M12 12h.01" />
                                    <path d="M16 12h.01" />
                                </svg>
                                <p>2k Total Comments</p>
                            </li>
                        </ul>
                        <p class="font-bold"> 4.5</p>
                    </div>
                </div>
            </div>
        </a>
           @endforeach
            </div>
            <div class="w-full lg:w-96 bg-white rounded-xl shadow-md border border-gray-100 p-4">
                <h3 class="text-xl font-bold text-gray-800 mb-5">Cari & Filter</h3>
                <form id="formFilter" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4">
                    <!-- Search Box -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari
                            Mitra</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="JovaRental, Pengusaha...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    class="text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building-2">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                                    <path d="M10 6h4" />
                                    <path d="M10 10h4" />
                                    <path d="M10 14h4" />
                                    <path d="M10 18h4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Lokasi Anda</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Jakarta, Semarang...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    class="text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari
                            Berdasarkan</label>
                        <div class="relative">
                            <input type="text" id="search" name="nama" value="{{ request('nama') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
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

                    <div class="flex flex-row lg:flex-col items-end gap-4">
                        <!-- Apply Filters Button -->
                        <button type="submit"
                            class="w-full h-fit text-nowrap bg-primary text-white font-medium py-2 px-4 rounded-lg transition-colors shadow-sm flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                            </svg>
                            Terapkan Filter
                        </button>
                        <button type="button" onclick="document.getElementById('formFilter').reset()"
                            class="text-sm w-full rounded-md bg-primary/25 text-primary py-2 px-4 hover:underline">Reset
                            Semua
                            Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-user-layout>
