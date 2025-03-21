<x-admin-layout title="Mitra Data">
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
        <div class="container mx-auto mt-4">
            <div class="grid grid-cols-1 gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <div class="bg-white rounded-xl p-4 flex flex-col gap-4 relative">
                        <a href="{{ route('admin.mitra.detailmitraView') }}"
                            class="absolute top-0 right-0 m-2 p-2 bg-primary/20 rounded-full text-primary transition-all duration-300 ease-in-out hover:bg-primary hover:text-white">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="flex gap-4">
                            <img class="w-56 h-56 object-cover rounded-md" draggable="false"
                                src="https://i.pinimg.com/736x/39/ea/d6/39ead63b3820b30f3b183175f70e1d75.jpg"
                                alt="">
                            <div>
                                <h1 class="font-bold uppercase text-xl plus-jakarta-sans-font">Pengusaha Suskses</h1>
                                <p class="text-sm">25 Jan 2024</p>
                                <div class="mt-4">
                                    <ul class="flex gap-6">
                                        <li>
                                            <p class="font-bold">Rating</p>
                                            <p>4.5</p>
                                        </li>
                                        <li>
                                            <p class="font-bold">Total Order</p>
                                            <p>40k</p>
                                        </li>
                                        <li>
                                            <p class="font-bold">Status Company</p>
                                            <div class="p-1 bg-green-600/20 text-green-600 px-4 rounded-full w-fit">
                                                Active
                                            </div>
                                        </li>
                                        <li>
                                            <p class="font-bold">Location</p>
                                            <p>Kepulauan Riau, Batam Kota</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4">
                                    <div class="border bg-primary/20 border-primary/30 p-2 rounded-md w-fit flex gap-2">
                                        <img draggable="false" src="https://i.pinimg.com/736x/ef/38/49/ef38494e504f7f985c17e47e79592204.jpg"
                                            class="w-16 h-16 object-cover rounded-sm" alt="">
                                        <div>
                                            <h6 class="plus-jakarta-sans-font font-bold">Mitsubisi Pajero</h6>
                                            <p class="text-sm">400 Order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus-jakarta-sans-font">
                            <p>Pengusaha Sukses Rental adalah penyedia layanan rental mobil dan motor terpercaya yang
                                menawarkan
                                kendaraan berkualitas, harga terjangkau, dan pelayanan profesional. Kami hadir untuk
                                memenuhi
                                kebutuhan transportasi Anda, baik untuk perjalanan bisnis, wisata, maupun keperluan
                                sehari-hari,
                                dengan armada yang selalu terawat dan siap digunakan. Dengan komitmen terhadap
                                kenyamanan
                                dan
                                kepuasan pelanggan, Pengusaha Sukses Rental memastikan setiap perjalanan Anda lebih
                                aman,
                                praktis, dan menyenangkan.</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</x-admin-layout>
