<x-mitra-layout title="Tambah Unit Kendaraan" >
    <div class="p-4">
        <div class="bg-white rounded-xl p-5">
            <form action="{{ route('mitra.unitKendaraan.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="relative">
                        <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Kendaraan</label>
                        <select name="id_kendaraan"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full focus:outline-none"
                            required>
                            <option value="" disabled selected>Pilih Kendaraan</option>
                            @foreach($kendaraan as $item)
                                <option value="{{ $item->id_kendaraan }}">{{ $item->nama_kendaraan }}</option>
                            @endforeach
                        </select>
                        @error('id_kendaraan')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative">
                        <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Alamat Mitra</label>
                        <select name="id_alamat_mitra"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full focus:outline-none"
                            required>
                            <option value="" disabled selected>Pilih Alamat Mitra</option>
                            @foreach($alamatMitra as $item)
                                <option value="{{ $item->id_alamat }}">{{ $item->alamat }}</option>
                            @endforeach
                        </select>
                        @error('id_alamat_mitra')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="relative mb-6">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Plat Nomor</label>
                    <input type="text" name="plat_nomor"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan plat nomor" value="{{ old('plat_nomor') }}" required>
                    @error('plat_nomor')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative mb-6">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Status Unit Kendaraan</label>
                    <select name="status_unit_kendaraan"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full focus:outline-none"
                        required>
                        <option value="tersedia" {{ old('status_unit_kendaraan') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="disewa" {{ old('status_unit_kendaraan') == 'disewa' ? 'selected' : '' }}>Disewa</option>
                        <option value="maintenance" {{ old('status_unit_kendaraan') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                    </select>
                    @error('status_unit_kendaraan')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end items-center gap-3">
                    <button type="submit"
                        class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                        Simpan
                    </button>

                    <button type="button" onclick="window.location.href='{{ route('mitra.unitKendaraan.index') }}'"
                        class="w-40 h-12 shadow-sm rounded-full bg-red-600 hover:bg-red-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-mitra-layout>