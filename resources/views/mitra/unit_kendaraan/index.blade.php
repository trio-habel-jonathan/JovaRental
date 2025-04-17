<x-mitra-layout title="Daftar Unit Kendaraan">
    <div class="p-4">
        <h1 class="montserrat-font text-2xl font-semibold">List Alamat Mitra</h1>
        <div class="flex items-center gap-3 mt-2 overflow-x-auto">
            @foreach ($alamatMitra as $alamat)
            <div class="bg-white rounded-xl p-4 shadow-md border">
                <h2 class="montserrat-font font-semibold text-lg">{{ $alamat->alamat }}</h2>
                <p class="plus-jakarta-sans-font text-sm text-gray-600">Kota: {{ $alamat->kota }}, Kecamatan: {{
                    $alamat->kecamatan }}</p>
                <p class="plus-jakarta-sans-font text-sm text-gray-600">Provinsi: {{ $alamat->provinsi }}, Kode Pos: {{
                    $alamat->kode_pos }}</p>
                <p class="plus-jakarta-sans-font text-sm text-gray-600">No. Telepon: {{ $alamat->no_telepon }}</p>
                <div class="mt-3 flex items-center justify-between">
                    
                    @if ($alamat->id_alamat === request()->input('q'))
                    <span class="text-green-500 font-semibold text-sm">Dipilih</span>
                    @else
                    <a href="?q={{$alamat->id_alamat}}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600">
                        Lihat Unit Kendaraan
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 mb-2 flex items-center justify-between">
            <h1 class="montserrat-font text-2xl font-semibold ">List Unit Kendaraan</h1>

            <div class="space-x-2">
                @if(request()->has('q'))
                <a href="{{route('mitra.unitKendaraan.index')}}"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600">
                    Show All
                </a>
                @endisset

                <a href="{{route('mitra.unitKendaraan.create')}}"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600">
                    Tambah Unit Kendaraan
                </a>
            </div>
        </div>
        <div class="overflow-x-auto bg-white shadow-md rounded-lg max-w-full custom-scrollbar">
            <table class="w-full text-sm text-left border-collapse">
                <thead class="bg-primary text-white uppercase">
                    <tr>
                        <th class="px-6 py-3 border-b">Foto</th>
                        <th class="px-6 py-3 border-b whitespace-nowrap">Nama Kendaraan</th>
                        <th class="px-6 py-3 border-b whitespace-nowrap">Jumlah Kursi</th>
                        <th class="px-6 py-3 border-b whitespace-nowrap">Harga Sewa per/hari</th>
                        <th class="px-6 py-3 border-b whitespace-nowrap">Plat Nomor</th>
                        <th class="px-6 py-3 border-b">Status</th>
                        <th class="px-6 py-3 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unitKendaraan as $unit)
                    <tr class="hover:bg-gray-50 transition">
                        @php
                        $getFirstImage = json_decode($unit->kendaraan->fotos);
                        @endphp
                        <td class="px-6 py-4 whitespace-nowrap"><img src="{{asset('kendaraan/'.$getFirstImage[0])}}"
                                alt="Car image" width="80"></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $unit->kendaraan->nama_kendaraan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $unit->kendaraan->jumlah_kursi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp. {{ $unit->kendaraan->harga_sewa_perhari }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $unit->plat_nomor }}</td>
                        <td class="px-6 py-4">{{ ucfirst($unit->status_unit_kendaraan) }}
                            <x-modal-delete counter="{{ $loop->iteration }}"
                                formAction="{{ route('mitra.unitKendaraan.destroy', $unit->id_unit) }}"
                                uuid="{{ $unit->id_unit }}" />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap  space-x-2">
                            <a href="{{ route('mitra.unitKendaraan.edit', $unit->id_unit) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-600 transition">
                                Edit
                            </a>
                            <a href="{{ route('mitra.unitKendaraan.edit', $unit->id_unit) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-600 transition">
                                Detail
                            </a>

                            <label for="modal-delete-toggle-{{ $loop->iteration }}"
                                class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600 transition">
                                Hapus
                            </label>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-mitra-layout>