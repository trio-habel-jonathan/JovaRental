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
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($allmitra as $mitra)
                    <a href="{{ route('admin.mitra.detailmitraView') }}"
                        class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 ease-in-out h-96 hover:shadow-2xl transform hover:-translate-y-1">
                        <!-- Fixed gradient overlay that doesn't change on hover -->
                        <div
                            class="absolute z-10 inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-100 pointer-events-none">
                        </div>

                        <img class="h-full z-0 w-full object-cover rounded-xl transition-transform duration-700 ease-in-out group-hover:scale-105"
                            src="https://i.pinimg.com/736x/27/e0/74/27e074008b1d54fb474224de9102651b.jpg"
                            alt="Partner profile image">

                        <!-- Content container -->
                        <div
                            class="absolute z-20 bottom-0 left-0 right-0 p-5 transform transition-transform duration-500 ease-out">
                            <!-- Tag/label that slides in -->
                            <span
                                class="inline-block bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full mb-3 tracking-wide opacity-0 transform -translate-x-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-x-0">PARTNER</span>

                            <!-- Name - starts visible but animates -->
                            <h1 class="text-2xl font-bold text-white uppercase transition-all duration-300">
                             {{$mitra->nama_mitra}}</h1>

                            <!-- Details that fade in -->
                            <p
                                class="text-white/80 text-sm font-medium mt-1 transition-all duration-500 opacity-70 group-hover:opacity-100">
                                {{$mitra->nama_pemilik}}</p>

                            <!-- Extra details that appear on hover -->
                            <div
                                class="mt-3 max-h-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:max-h-40">
                                <p class="text-white/70 text-sm leading-relaxed">Business mentor with 10+ years of
                                    experience in retail and e-commerce sectors.</p>
                                <div class="flex items-center mt-3 text-white/80">
                                    <span class="text-sm font-medium">View profile</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 ml-1 transform transition-transform duration-300 group-hover:translate-x-1"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>
