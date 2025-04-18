<x-mitra-layout title="List Alamat">
    <div class="p-4">
        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <div class="flex flex-col md:flex-row justify-between gap-4">
                <div class="relative">
                    <input type="text" placeholder="Cari Alamat..."
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex gap-3">

                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Filter</button>
                </div>
            </div>
        </div>

        <div class="  mt-4">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg max-w-full custom-scrollbar">
                <table class="w-full text-sm text-left border-collapse ">
                    <thead class="bg-primary text-white uppercase">
                        <tr>
                            <th class="px-6 py-3 border-b">Alamat</th>
                            <th class="px-6 py-3 border-b whitespace-nowrap">No Telepon</th>
                            <th class="px-6 py-3 border-b">Kota</th>
                            <th class="px-6 py-3 border-b">Kecamatan</th>
                            <th class="px-6 py-3 border-b">Provinsi</th>
                            <th class="px-6 py-3 border-b whitespace-nowrap">Kode Pos</th>
                            <th class="px-6 py-3 border-b">Latitude</th>
                            <th class="px-6 py-3 border-b">Longitude</th>
                            <th class="px-6 py-3 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($alamatMitra as $item)


                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">{{$item->alamat}}</td>
                            <td class="px-6 py-4">{{$item->no_telepon}}</td>
                            <td class="px-6 py-4">{{$item->kota}}</td>
                            <td class="px-6 py-4">{{$item->kecamatan}}</td>
                            <td class="px-6 py-4">{{$item->provinsi}}</td>
                            <td class="px-6 py-4">{{$item->kode_pos}}</td>
                            <td class="px-6 py-4">{{$item->latitude}}</td>
                            <td class="px-6 py-4">{{$item->longitude}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{route('mitra.alamat.MitraEdit', $item->id_alamat)}}"       class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-600 transition">Edit</a>

                                <label for="modal-delete-toggle-{{ $loop->iteration }}"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600 transition">
                                    Hapus</label>
                                <x-modal-delete counter="{{ $loop->iteration }}"
                                    formAction="{{ route('mitra.alamat.MitraDestroy', $item->id_alamat) }}"
                                    uuid="{{ $item->id_alamat }}" />
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{route('mitra.alamat.MitraCreate')}}"
        class="fixed bottom-0 right-0 p-2 rounded-md text-white m-5 bg-primary transition-all duration-300 ease-in-out hover:scale-125">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12 8V16M8 12H16M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </a>
</x-mitra-layout>