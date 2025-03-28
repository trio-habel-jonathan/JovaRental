<x-mitra-layout title="Daftar Pesanan">
    <div class="p-4">
        <div class="flex items-end justify-between">
            <form action="" class="flex gap-4 items-center">
                <div class="flex rounded-full items-center gap-2 text-gray-400 bg-white w-fit pl-2">
                    <label for="search">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.65 16.65M11 6C13.7614 6 16 8.23858 16 11M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <input type="text" id="search" placeholder="Search..."
                        class="w-80 bg-transparent text-black placeholder:text-gray-400 focus:outline-none">
                    <button type="submit" class="bg-primary text-white font-semibold rounded-full p-2 px-4">
                        Search
                    </button>
                </div>
            </form>
            <div>
                <p class="text-sm text-gray-400">Showing 12 of records</p>
            </div>
        </div>
        <form action="" class="flex gap-4 items-center bg-white rounded-md shadow-md mt-4">

                <button type="submit" name="status" value=""
                    class="text-gray-700 px-6 py-3 text-sm hover:text-primary font-bold relative overflow-hidden group block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Terkonfirmasi</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-1 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </button>
                <button type="submit" name="status" value=""
                    class="text-gray-700 px-6 py-3 text-sm hover:text-primary font-bold relative overflow-hidden group block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Pending</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-1 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </button>  
                <button type="submit" name="status" value=""
                class="text-gray-700 px-6 py-3 text-sm hover:text-primary font-bold relative overflow-hidden group block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Dibatalkan</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-1 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </button>    

        </form>
        <div class="flex flex-col gap-2 mt-4">
            @foreach($allPesanan as $pemesanan)
                <div class="flex items-center justify-between px-4 bg-white rounded-md shadow-md">
                    <div class="flex items-center gap-2">
                        <img class="rounded-full w-36 h-36"
                            src="https://i.pinimg.com/736x/76/f3/f3/76f3f3007969fd3b6db21c744e1ef289.jpg"
                            alt="">
                        <div class="w-64">
                            <h1 class="font-bold text-md montserrat-font">{{$pemesanan->entitasPenyewa->nama_entitas}}</h1>
                            <p class="montserrat-font text-xs">franklinchang@gmail.com</p>
                            <div class="flex justify-between mt-4 text-sm montserrat-font">
                                <p>Qty: 2</p>
                                <p class="font-bold">Total Biaya : Rp {{$pemesanan->total_harga}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="plus-jakarta-sans-font">
                        <p class="text-gray-600 text-sm">Status</p>
                        <p class="text-green-600 font-semibold">{{$pemesanan->status_pemesanan}}</p>
                    </div>
                    <div class="plus-jakarta-sans-font">
                        <p class="text-gray-600 text-sm">Tanggal Pemesanan</p>
                        <p class="font-semibold">{{$pemesanan->tanggal_pemesanan}}</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('mitra.pesanan.pesanandetailView', $pemesanan->id_pemesanan) }}"
                            class="bg-primary/20 uppercase text-xs text-primary hover:bg-primary hover:text-white font-bold px-4 py-2 rounded-md">see
                            details</a>
                        <button
                            class="bg-primary uppercase text-xs text-white font-bold px-4 py-2 rounded-md">delete</button>
                    </div>
                </div>
@endforeach
        </div>
    </div>
</x-mitra-layout>
