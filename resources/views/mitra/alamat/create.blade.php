<x-mitra-layout title="Create Alamat Mitra">
    <div class="m-4 p-4 rounded-xl bg-white">
        <form action="{{route('mitra.alamat.MitraStore')}}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="relative ">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Alamat</label>
                    <input type="text" name="alamat"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan alamat" value="{{ old('alamat') }}" required>
                    @error('alamat')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative ">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Kota</label>
                    <input type="text" name="kota"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan kota" value="{{ old('kota') }}" required>
                    @error('kota')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="relative ">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Kecamatan</label>
                    <input type="text" name="kecamatan"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan kecamatan" value="{{ old('kecamatan') }}" required>
                    @error('kecamatan')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative ">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Provinsi</label>
                    <input type="text" name="provinsi"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan provinsi" value="{{ old('provinsi') }}" required>
                    @error('provinsi')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="relative mb-6">
                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Kode Pos</label>
                <input type="text" name="kode_pos"
                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                    placeholder="Masukkan kode pos" value="{{ old('kode_pos') }}" required>
                @error('kode_pos')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative mb-6">
                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">No Telepon</label>
                <input type="text" name="no_telepon"
                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                    placeholder="Masukkan no telepon" value="{{ old('no_telepon') }}" required>
                @error('no_telepon')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>



            <div class="grid grid-cols-2 gap-4 ">
                <div class="relative mb-6">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Latitude</label>
                    <input type="text" name="latitude"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan latitude" value="{{ old('latitude') }}" required>
                    @error('latitude')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mb-6">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Longitude</label>
                    <input type="text" name="longitude"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Masukkan longitude" value="{{ old('longitude') }}" required>
                    @error('longitude')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end items-center gap-3">
                <button type="submit"
                    class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                    Simpan
                </button>

                <button type="button" onclick="window.location.href='{{route('mitra.alamat.MitraView')}}'"
                    class="w-40  h-12 shadow-sm rounded-full bg-red-600 hover:bg-red-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                    Batal
                </button>
            </div>
        </form>
    </div>
</x-mitra-layout>