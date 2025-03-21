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
            @for ($i = 0; $i < 5; $i++)
                <button type="submit" name="status" value="sudah dibayar"
                    class="text-gray-700 px-6 py-3 text-sm hover:text-primary font-bold relative overflow-hidden group block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Sudah
                        Dibayar</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-1 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </button>
            @endfor
        </form>
        <div class="flex gap-4 w-full">
            <div class="container mx-auto mt-4">
                <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                    <table class="w-full text-sm text-left border-collapse">
                        <thead class="bg-primary text-white uppercase">
                            <tr class="text-center">
                                <th class="px-6 py-3 border-b">Tanggal Pesanan</th>
                                <th class="px-6 py-3 border-b">Nama Pemesan</th>
                                <th class="px-6 py-3 border-b">Nomor Handphone</th>
                                <th class="px-6 py-3 border-b">Status Pembayaran</th>
                                <th class="px-6 py-3 border-b">Status Kendaraan</th>
                                <th class="px-6 py-3 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @for ($i = 1; $i <= 10; $i++)
                                <tr class="hover:bg-gray-50 text-center transition">
                                    <td class="px-4 py-2 flex-nowrap">Wed, 19 March 2025</td>
                                    <td class="px-4 py-2 flex items-center gap-4">
                                        <p><span class="font-semibold">Franklin</span> franklinchang@gmail.com</p>
                                    </td>
                                    <td class="px-4 py-2">0812345678</td>
                                    <td class="px-4 py-2">
                                        <div
                                            class="bg-green-600/20 p-1 text-xs text-center rounded-full text-green-600 font-medium">
                                            Sudah Bayar
                                        </div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div
                                            class="bg-green-600/20 p-1 text-xs text-center rounded-full text-green-600 font-medium">
                                            Sudah Diantar
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 flex items-between gap-2 justify-center">
                                        <a href="{{ route('admin.user.edituserView') }}"
                                            class="text-blue-600 hover:underline">Edit</a>
                                        <a href="{{ route('mitra.pesanan.pesanandetailView') }}"
                                            class="text-blue-600 hover:underline">Details</a>
                                        <form action="" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-mitra-layout>
