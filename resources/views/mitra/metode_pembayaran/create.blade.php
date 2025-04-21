<x-mitra-layout title="Create Metode Pembayaran Mitra">
    <div class="m-4 p-4 rounded-xl bg-white">
        <form action="{{ route('mitra.metodePembayaran.store') }}" method="POST">
            @csrf
            <div class="relative mb-6">
                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama Metode</label>
                <input type="text" name="nama_metode"
                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                    placeholder="Masukkan nama metode" value="{{ old('nama_metode') }}" required>
                @error('nama_metode')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative mb-6">
                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi"
                    class="block w-full px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                    placeholder="Masukkan deskripsi">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative mb-6">
                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Status Aktif</label>
                <select name="is_active"
                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full focus:outline-none">
                    <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
                @error('is_active')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end items-center gap-3">
                <button type="submit"
                    class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                    Simpan
                </button>

                <button type="button" onclick="window.location.href='{{ route('mitra.metodePembayaran.index') }}'"
                    class="w-40 h-12 shadow-sm rounded-full bg-red-600 hover:bg-red-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                    Batal
                </button>
            </div>
        </form>
    </div>
</x-mitra-layout>
